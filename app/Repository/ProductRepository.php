<?php


namespace App\Repository;

use App\Models\Course;
use App\Models\Products;

class ProductRepository
{
    protected $entity;

    public function  __construct(Products $products){
        $this->entity = $products;
    }
    public function getAllProducts(){
        return $this->entity->get();
    }
    public function  createNewProduct(array $data){
        return $this->entity->create($data);
    }
    public function  getProductById(string $identify){
        return $this->entity->where('id', $identify)->firstOrFail();
    }

    public function  updateProduct(string $identify, array $data){
        $product = $this->getProductById($identify);
        return $product->update($data);
    }


    public function  deleteProductById(string $identify){
      $product =  $this->entity->where('id', $identify)->firstOrFail();
     return $product->delete($identify);
    }
}
