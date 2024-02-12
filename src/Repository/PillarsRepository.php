<?php

namespace App\Repository;

use App\Entity\Pillars;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Pillars>
 *
 * @method Pillars|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pillars|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pillars[]    findAll()
 * @method Pillars[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PillarsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pillars::class);
    }

//    /**
//     * @return Pillars[] Returns an array of Pillars objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Pillars
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
