<?php

namespace App\Services;

use App\Repository\ProductRepository;

class ProductService {

    protected $repository;

    public function  __construct(ProductRepository $productRepository){
        $this->repository = $productRepository;
    }
    public function getProducts(){

        return $this->repository->getAllProducts();
    }

    public function  createNewProduct(array $data){
        return $this->repository->createNewProduct($data);
    }

    public function  getProduct(string $identify){
        return $this->repository->getProductById($identify);
    }

    public function  deleteProduct(string $identify){

        return $this->repository->deleteProductById($identify);
    }
}
