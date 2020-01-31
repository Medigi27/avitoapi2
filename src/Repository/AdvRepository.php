<?php

namespace App\Repository;

use App\Entity\AdvEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method AdvEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method AdvEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method AdvEntity[]    findAll()
 * @method AdvEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AdvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AdvEntity::class);
    }

    // /**
    //  * @return AdvEntity[] Returns an array of AdvEntity objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AdvEntity
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
