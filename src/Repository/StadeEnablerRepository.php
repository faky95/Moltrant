<?php

namespace App\Repository;

use App\Entity\StadeEnabler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StadeEnabler|null find($id, $lockMode = null, $lockVersion = null)
 * @method StadeEnabler|null findOneBy(array $criteria, array $orderBy = null)
 * @method StadeEnabler[]    findAll()
 * @method StadeEnabler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StadeEnablerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StadeEnabler::class);
    }

    // /**
    //  * @return StadeEnabler[] Returns an array of StadeEnabler objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?StadeEnabler
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
