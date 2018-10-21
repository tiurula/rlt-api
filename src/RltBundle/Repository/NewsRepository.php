<?php

namespace RltBundle\Repository;

/**
 * NewsRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class NewsRepository
{
    /**
     * Entity full signature (with bundle name, like "RltBundle:User").
     *
     * @return string
     */
    public function getEntitySignature(): string
    {
        return'RltBundle:News';
    }

    /**
     * Alias for table that will be used in DQL.
     *
     * @return string
     */
    public function getAlias(): string
    {
        return 'n';
    }
}
