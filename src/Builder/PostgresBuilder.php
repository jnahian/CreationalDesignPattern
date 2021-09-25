<?php

namespace Nahian\LoopCreationalDesignPattern\Builder;

class PostgresBuilder extends MySQLBuilder
{
    public function limit(int $start, int $offset): ISQLBuilder
    {
        parent::limit($start, $offset);

        $this->query->limit = " LIMIT " . $start . " OFFSET " . $offset;

        return $this;
    }
}
