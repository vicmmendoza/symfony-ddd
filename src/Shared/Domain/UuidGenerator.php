<?php 

namespace Vic\Shared\Domain;

interface UuidGenerator
{
    public function generate(): string;
}