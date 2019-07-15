const path = require('path');
const PROTO_PATH = path.resolve(__dirname, './proto/contrived.proto');
const GRPCClient = require('node-grpc-client');

const myClient = new GRPCClient(PROTO_PATH, 'service', 'ContrivedService', 'grpc_php_server:3000');

const dataToSend = {
    body: 'Nodejs client!'
};

myClient.runService('ContrivedMethod', dataToSend, (err, res) => {
    if (err) {
        console.error(err);
    }

    console.log('Service response\n', res);
});