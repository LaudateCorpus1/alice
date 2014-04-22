<?php

namespace Nelmio\Alice\fixtures;

abstract class AbstractUser
{
    public $username;
    public $fullname;
    public $birthDate;
    public $email;

    public function __construct($username = null, $email = null, \DateTime $birthDate = null)
    {
        $this->username = $username;
        $this->email = $email;
        $this->birthDate = $birthDate;
    }

    public function getAge()
    {
        return 25;
    }

    public function doStuff($dummy, $dummy2, $arg)
    {
        $this->username = $arg;
    }
}
