<?php

namespace App\Repository;

use App\Entity\EnablerSecteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method EnablerSecteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method EnablerSecteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method EnablerSecteur[]    findAll()
 * @method EnablerSecteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EnablerSecteurRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, EnablerSecteur::class);
    }

    // /**
    //  * @return EnablerSecteur[] Returns an array of EnablerSecteur objects
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
    public function findOneBySomeField($value): ?EnablerSecteur
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
