<?php

declare(strict_types=1);

namespace v1\Users;

use Psr\Container\ContainerInterface;

class GetUserHandlerFactory
{
    public function __invoke(ContainerInterface $container): GetUserHandler
    {
        return new GetUserHandler();
    }
}
