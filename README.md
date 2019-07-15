_Note: if you want to play around, don't forget to grab all dependencies._   
```bash
docker-compose run grpc_php_server composer install
docker-compose run client_nodejs npm install
```
For trying it out:
```bash
 docker-compose up
```
The output result:
```bash
grpc_php_server    | DEBU[0000] [rpc]: started                               
grpc_php_server    | DEBU[0000] [grpc]: started                              
client_nodejs      | Service response
client_nodejs      |  { body: 'Hello' }
```
As you could see it's tremendous simple to start working with gRPC and start thinking of adapting that one to our workflow.

What kind of benefits of adopting GRPC:
1. Easy to understand.
2. Web infrastructure already built on top of HTTP.
3. Great tooling for testing, inspection, and modification.
4. Loose coupling between clients/server makes changes easy.
5. High-quality HTTP implementations in every language.
