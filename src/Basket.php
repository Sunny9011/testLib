<?php


namespace src;


class Basket
{
    private array $products;

    public function addProduct(Product $newProduct)
    {
        $this->products[] = $newProduct;
    }

    public function getBasketWithProducts(): array
    {
        return $this->products;
    }

    public function calculatePrice($products): int
    {
        $sum = 0;
       foreach ($products as $product) {
           $sum += $product->price;
       }

       return $sum;
    }
}