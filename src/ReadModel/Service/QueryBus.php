<?php

declare(strict_types=1);

namespace Zisato\CQRS\ReadModel\Service;

use Zisato\CQRS\ReadModel\ValueObject\Query;
use Zisato\CQRS\ReadModel\ValueObject\QueryResult;

interface QueryBus
{
    public function ask(Query $query): QueryResult;
}
