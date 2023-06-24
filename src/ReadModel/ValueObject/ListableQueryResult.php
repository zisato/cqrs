<?php

declare(strict_types=1);

namespace Zisato\CQRS\ReadModel\ValueObject;

interface ListableQueryResult extends QueryResult
{
    public function page(): int;

    public function perPage(): int;

    public function totalPages(): int;

    public function totalItems(): int;
}
