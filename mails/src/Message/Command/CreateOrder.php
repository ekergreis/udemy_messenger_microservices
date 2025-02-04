<?php
namespace App\Message\Command;

class CreateOrder
{
    private $productId;
    private $productAmount;

    public function __construct(int $productId, int $productAmount)
    {
        $this->productId = $productId;
        $this->productAmount = $productAmount;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @return int
     */
    public function getProductAmount(): int
    {
        return $this->productAmount;
    }


}