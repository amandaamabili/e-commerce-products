<?php

namespace App\Contracts;

interface ProductInterface
{
     public function getProducts();
     public function createNewProduct(array $data);
     public function getProduct(string $identify);
     public function updateProduct(string $identify, array $data);
     public function deleteProduct(string $identify);

}
