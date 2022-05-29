<?php

namespace Tests\Feature;

use App\Http\Resources\ProductResource;
use App\Models\Products;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use DatabaseTransactions;


    /**
     * A basic feature test example.
     *
     * @return void
     */


    public function test_store()
    {
        $products = new Products([
            "name"=> "Computador 8GB RAM",
            "sugest_price" => 5289.89,
            "category" => "tecnology",
            "brand"=> "Samsung",
            "stock_quantity" =>20
        ]);
        $this->post('/product', array($products));
        $this->assertEquals('Computador 8GB RAM', $products->name);
    }

    public function test_index()
    {
        $data = Products::factory()->make();

        $response = $this->get('/products', array($data));

        $response->assertStatus(200);
    }




}
