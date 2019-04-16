<?php

namespace App\Repository;

use App\Entity\InscriptionEnabler;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InscriptionEnabler|null find($id, $lockMode = null, $lockVersion = null)
 * @method InscriptionEnabler|null findOneBy(array $criteria, array $orderBy = null)
 * @method InscriptionEnabler[]    findAll()
 * @method InscriptionEnabler[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InscriptionEnablerRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InscriptionEnabler::class);
    }

    // /**
    //  * @return InscriptionEnabler[] Returns an array of InscriptionEnabler objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InscriptionEnabler
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
