<?php

namespace Dsg\agenciaBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TrabajosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TrabajosRepository extends EntityRepository
{
    public function getTrabajosActivos($categoria_id = null, $max = null, $offset = null)
  {
    $qb = $this->createQueryBuilder('j')
               ->where('j.finaliza > :date')
               ->setParameter('date', date('Y-m-d H:i:s', time()))
               ->orderBy('j.finaliza', 'DESC');
 
    if($max) {
        $qb->setMaxResults($max);
    }
    
    if($offset)
    {
        $qb->setFirstResult($offset);
    }
    
    if($categoria_id)
    {
      $qb->andWhere('j.categoria = :categoria_id')
         ->setParameter('categoria_id', $categoria_id);
    }
 
    $query = $qb->getQuery();
 
    return $query->getResult();
  }
  
  
  
  public function countTrabajosActivos($categoria_id = null)
    {
        $qb = $this->createQueryBuilder('j')
                   ->select('count(j.id)')
                   ->where('j.finaliza > :date')
                   ->setParameter('date', date('Y-m-d H:i:s', time()));

        if ($categoria_id) {
            $qb->andWhere('j.categoria = :categoria_id')
               ->setParameter('categoria_id', $categoria_id);
        }

        $query = $qb->getQuery();

        return $query->getSingleScalarResult();
    }
    
    
    
    
    //Si el trabajo no esta activo mandamos a una página 404
    public function getTrabajoActivo($id)
    {
        $query = $this->createQueryBuilder('j')
            ->where('j.id = :id')
            ->setParameter('id', $id)
            ->andWhere('j.finaliza > :date')
            ->setParameter('date', date('Y-m-d H:i:s', time()))
            ->setMaxResults(1)
            ->getQuery();
 
        try {
            $trabajo = $query->getSingleResult();
        } catch (\Doctrine\Orm\NoResultException $e) {
            $trabajo = null;
        }
 
        return $trabajo;
    }
}
