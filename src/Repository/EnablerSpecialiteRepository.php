<?php

namespace App\Repository;

use App\Entity\EnablerSpecialite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EnablerSpecialite|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnablerSpecialite|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnablerSpecialite[]    findAll()
 * @method EnablerSpecialite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnablerSpecialiteRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EnablerSpecialite::class);
    }

    // /**
    //  * @return EnablerSpecialite[] Returns an array of EnablerSpecialite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EnablerSpecialite
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
