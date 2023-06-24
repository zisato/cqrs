<?php

declare(strict_types=1);

namespace Zisato\CQRS\ReadModel\ValueObject;

interface ListableQuery extends Query
{
    public function page(): int;

    public function perPage(): int;
}
