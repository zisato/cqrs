<?php

declare(strict_types=1);

namespace Zisato\CQRS\ReadModel\ValueObject;

interface QueryResult
{
    /**
     * @return array<string|int, mixed>
     */
    public function data(): array;
}
