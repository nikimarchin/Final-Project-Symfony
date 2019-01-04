<?php

namespace AppBundle\Repository;
use AppBundle\Entity\Article;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    /**
     * @param $id
     * @return array
     */
    public function findByCategory($id)
    {
        return $this->createQueryBuilder("articles")
            ->where("articles.category_id = :category_id")
            ->setParameter('category_id', $id)
            ->orderBy('articles.dateAdded', 'desc')
            ->getQuery()
            ->getResult();
    }
}



