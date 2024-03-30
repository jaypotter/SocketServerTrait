<?php

declare(strict_types=1);

namespace Potter\Socket\Server;

use \Socket;

trait SocketServerTrait 
{
    final public function listen(int $backlog = 0): void
    {
        socket_listen($this->getSocket(), $backlog);
    }
    
    abstract public function getSocket(): Socket;
}