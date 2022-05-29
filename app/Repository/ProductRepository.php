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
    public function  deleteProductById(string $identify){
      $course =  $this->entity->where('id', $identify)->firstOrFail();
     return $course->delete($identify);
    }
}
