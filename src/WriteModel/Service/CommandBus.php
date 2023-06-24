<?php

declare(strict_types=1);

namespace Zisato\CQRS\WriteModel\Service;

use Zisato\CQRS\WriteModel\ValueObject\Command;

interface CommandBus
{
    public function handle(Command $command): void;
}
