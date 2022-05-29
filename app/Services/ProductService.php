<?php

namespace App\Services;

use App\Contracts\ProductInterface;
use App\Repository\ProductRepository;
use Throwable;

class ProductService implements ProductInterface {

    protected $repository;

    public function  __construct(ProductRepository $productRepository){
        $this->repository = $productRepository;
    }
    public function getProducts(){
        try {
            return $this->repository->getAllProducts();
        }catch (Throwable $e){
            report($e->getMessage());

        }
    }

    public function  createNewProduct(array $data){
        try {
            return $this->repository->createNewProduct($data);
        }catch (Throwable $e){
            report($e->getMessage());
        }
    }

    public function  getProduct(string $identify){
        try {
            return $this->repository->getProductById($identify);
        }catch (Throwable $e){
            report($e->getMessage());
        }
    }

    public function updateProduct(string $identify, array $data){
        try {
            return $this->repository->updateProduct($identify, $data);
        }catch (Throwable $e){
            report($e->getMessage());
        }
    }

    public function  deleteProduct(string $identify){
        try {
            return $this->repository->deleteProductById($identify);
        }catch (Throwable $e){
            report($e->getMessage());

        }
    }
}
