<?php

namespace Nahian\LoopCreationalDesignPattern\Builder;

interface ISQLBuilder
{
    public function select(string $table, array $fields): ISQLBuilder;

    public function where(string $field, string $value, string $operator = '='): ISQLBuilder;

    public function limit(int $start, int $offset): ISQLBuilder;

    public function getSQL(): string;
}
