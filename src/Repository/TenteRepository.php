<?php

namespace App\Repository;

use App\Entity\Tente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tente>
 *
 * @method Tente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tente[]    findAll()
 * @method Tente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TenteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tente::class);
    }

//    /**
//     * @return Tente[] Returns an array of Tente objects
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

//    public function findOneBySomeField($value): ?Tente
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
