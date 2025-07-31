<?php

namespace App\Repository;

use App\Entity\Tiragelist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tiragelist>
 *
 * @method Tiragelist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tiragelist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tiragelist[]    findAll()
 * @method Tiragelist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TiragelistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tiragelist::class);
    }

//    /**
//     * @return Tiragelist[] Returns an array of Tiragelist objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tiragelist
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
