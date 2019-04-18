<?php

namespace App\Repository;

use App\Entity\StadeDeveloppement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method StadeDeveloppement|null find($id, $lockMode = null, $lockVersion = null)
 * @method StadeDeveloppement|null findOneBy(array $criteria, array $orderBy = null)
 * @method StadeDeveloppement[]    findAll()
 * @method StadeDeveloppement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StadeDeveloppementRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, StadeDeveloppement::class);
    }

    // /**
    //  * @return StadeDeveloppement[] Returns an array of StadeDeveloppement objects
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
    public function findOneBySomeField($value): ?StadeDeveloppement
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
