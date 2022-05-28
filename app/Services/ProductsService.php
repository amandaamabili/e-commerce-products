<?php

namespace App\Services;

use App\Repository\ProductRepository;

class ProductsService
{
    protected  $repository;
    public function __construct(ProductRepository $productRepository){
        $this->repository = $productRepository;
    }
    public function  createNewProduct(array $data){
        return $this->repository->createNewProduct($data);
    }
}
