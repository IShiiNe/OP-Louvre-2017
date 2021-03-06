<?php

namespace OP\TradeBundle\Repository;

/**
 * DispoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DispoRepository extends \Doctrine\ORM\EntityRepository
{
    public function findWithDate($date)
    {
        $queryBuilder = $this->createQueryBuilder('a');

        $queryBuilder
            ->where('a.date = :date')
            ->setParameter('date', $date)
        ;

        return $queryBuilder
            ->getQuery()
            ->getResult()
        ;
    }

}
