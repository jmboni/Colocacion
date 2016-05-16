<?php
 
namespace Dsg\agenciaBundle\Repository;
 
use Doctrine\ORM\EntityRepository;
 
/**
 * AfiliadosRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AfiliadosRepository extends EntityRepository
{
    public function getForToken($token)
    {
        
        $qb = $this->createQueryBuilder('a')
            ->where('a.activado = :active')
            ->setParameter('active', 1)
            ->andWhere('a.token = :token')
            ->setParameter('token', $token)
            ->setMaxResults(1)
        ;
 
        
        try{
            $afiliado = $qb->getQuery()->getSingleResult();
        } catch(\Doctrine\Orm\NoResultException $e){
            $afiliado = null;
        }
        
        return $afiliado;
    }
}