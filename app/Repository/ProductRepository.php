<?php

namespace App\Repository;

use App\Models\product;

class ProductRepository
{
    protected $entity;

    public  function  __construct(Product $product){
        $this->entity = $product;
    }

    public function  createNewProduct(array $data){

        return $this->entity->create($data);
    }
}
