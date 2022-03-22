<?php 

namespace Vic\BackOffice\Shared\Domain;

interface UuidGenerator
{
    public function generate(): string;
}