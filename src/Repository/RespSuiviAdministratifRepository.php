<?php

namespace App\Repository;

use App\Entity\RespSuiviAdministratif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RespSuiviAdministratif|null find($id, $lockMode = null, $lockVersion = null)
 * @method RespSuiviAdministratif|null findOneBy(array $criteria, array $orderBy = null)
 * @method RespSuiviAdministratif[]    findAll()
 * @method RespSuiviAdministratif[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RespSuiviAdministratifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RespSuiviAdministratif::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(RespSuiviAdministratif $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(RespSuiviAdministratif $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return RespSuiviAdministratif[] Returns an array of RespSuiviAdministratif objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?RespSuiviAdministratif
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
