<?php
namespace App\MessageHandler\Command;

use App\Message\Command\CreateOrder;

class CreateOrderHandler
{
    public function __invoke(CreateOrder $createOrder)
    {
        // update warehouse database to keep stock up to date in physical stores
        sleep(4);
        var_dump($createOrder);
    }
}