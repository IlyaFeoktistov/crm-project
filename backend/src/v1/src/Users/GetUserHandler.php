<?php

declare(strict_types=1);

namespace v1\Users;

use Psr\Http\Message\ResponseInterface;
use Laminas\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class GetUserHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $host = $request->getUri()->getHost();
        $explodedHost = explode('.', $host);

        if (count($explodedHost) > 1) {
            $subdomain = $explodedHost[0];
        } else {
            $subdomain = "";
        }

        return new JsonResponse([
            "response" => "ok",
            "subdomain" => $subdomain
        ]);
    }
}
