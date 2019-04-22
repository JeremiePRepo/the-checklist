<?php

namespace App\Repository;

use App\Entity\Ponderator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Ponderator|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ponderator|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ponderator[]    findAll()
 * @method Ponderator[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PonderatorRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Ponderator::class);
    }

    // /**
    //  * @return Ponderator[] Returns an array of Ponderator objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ponderator
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
