<?php

declare(strict_types=1);

namespace App\Tests\Shared\Infrastructure\Persistence\Doctrine;

use Vic\Shared\Domain\Aggregate\AggregateRoot;
use Vic\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

class DoctrineRepositoryMother extends DoctrineRepository
{

    public function save(AggregateRoot $entity)
    {
        $this->persist($entity);
    }

}