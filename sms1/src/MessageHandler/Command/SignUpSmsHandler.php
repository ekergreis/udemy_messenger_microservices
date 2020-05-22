<?php
namespace App\MessageHandler\Command;

use App\Message\Command\CreateOrder;
use App\Message\Command\SignUpSms;

class SignUpSmsHandler
{
    public function __invoke(SignUpSms $signUpSms)
    {
        // connect to api of external service provider
        sleep(2);
        var_dump($signUpSms);
    }
}