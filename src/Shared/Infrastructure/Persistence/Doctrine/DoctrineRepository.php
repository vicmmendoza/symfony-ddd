<?php

declare(strict_types=1);

namespace Vic\Shared\Infrastructure\Persistence\Doctrine;

use Vic\Shared\Domain\Aggregate\AggregateRoot;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

abstract class DoctrineRepository
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
    }

    protected function entityManager(): EntityManager
    {
        return $this->entityManager;
    }

    protected function persist(AggregateRoot $entity): void
    {
        $this->entityManager()->persist($entity);
        $this->entityManager()->flush($entity);
    }

    protected function remove(AggregateRoot $entity): void
    {
        $this->entityManager()->remove($entity);
        $this->entityManager()->flush($entity);
    }

    protected function repository(string $entityClass): EntityRepository
    {
        return $this->entityManager->getRepository($entityClass);
    }
}
