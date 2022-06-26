<?php

declare(strict_types=1);

namespace Codelegacy\CustomLogger\Logger;

use Psr\Log\LoggerInterface;

class Logger
{
    /**
     * Description $logger
     *
     * @var LoggerInterface $logger
     */
    protected LoggerInterface $logger;

    /**
     * Logger constructor
     *
     * @param LoggerInterface $logger
     */
    public function __construct(
        LoggerInterface $logger
    ) {
        $this->logger = $logger;
    }

    /**
     * @return void
     */
    public function example(): void
    {
        $this->logger->debug('test');
    }
}
