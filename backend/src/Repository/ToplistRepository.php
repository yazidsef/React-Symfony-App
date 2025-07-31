<?php

namespace App\Repository;

use App\Entity\Toplist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Toplist>
 *
 * @method Toplist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Toplist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Toplist[]    findAll()
 * @method Toplist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ToplistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Toplist::class);
    }

//    /**
//     * @return Toplist[] Returns an array of Toplist objects
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

//    public function findOneBySomeField($value): ?Toplist
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
