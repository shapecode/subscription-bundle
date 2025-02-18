<?php

namespace Shapecode\SubscriptionBundle\Repository;

use Doctrine\Common\Persistence\ObjectRepository;
use Shapecode\SubscriptionBundle\Model\ProductInterface;

interface ProductRepositoryInterface extends ObjectRepository
{
    /**
     * Find a default product.
     *
     * @return ProductInterface|null
     */
    public function findDefault();
}
