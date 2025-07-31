<?php

namespace App\Repository;

use App\Entity\Participationlist;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Participationlist>
 *
 * @method Participationlist|null find($id, $lockMode = null, $lockVersion = null)
 * @method Participationlist|null findOneBy(array $criteria, array $orderBy = null)
 * @method Participationlist[]    findAll()
 * @method Participationlist[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ParticipationlistRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Participationlist::class);
    }

//    /**
//     * @return Participationlist[] Returns an array of Participationlist objects
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

//    public function findOneBySomeField($value): ?Participationlist
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
