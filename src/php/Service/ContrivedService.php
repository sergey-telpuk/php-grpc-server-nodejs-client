<?php


namespace Service;


use Service\ContrivedMessageRequest;
use Service\ContrivedMessageResponse;
use Service\ContrivedServiceInterface;
use Spiral\GRPC;

class ContrivedService implements ContrivedServiceInterface
{

    /**
     * @param GRPC\ContextInterface $ctx
     * @param ContrivedMessageRequest $in
     * @return ContrivedMessageResponse
     *
     * @throws GRPC\Exception\InvokeException
     */
    public function ContrivedMethod(GRPC\ContextInterface $ctx, ContrivedMessageRequest $in): ContrivedMessageResponse
    {
        $response = new ContrivedMessageResponse();
        $response->setBody("Hello");
        return $response;
    }
}