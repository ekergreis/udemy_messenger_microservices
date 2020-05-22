<?php
namespace App\Message\Command;

class SignUpSms
{
    /**
     * @var string
     */
    private $phoneNumber;

    public function __construct(string $phoneNumber)
    {

        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

}