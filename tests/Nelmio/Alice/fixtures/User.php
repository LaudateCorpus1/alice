<?php

namespace Nelmio\Alice\fixtures;

class User extends AbstractUser
{
    public $favoriteNumber;
    public $friends;

    public static function create($username = null, $email = null, \DateTime $birthDate = null)
    {
        return new static($username, $email, $birthDate);
    }

    public static function bogusCreate($username = null, $email = null, \DateTime $birthDate = null)
    {
    }

    public function customSetter($key, $value)
    {
        $this->$key = $value . ' set by custom setter';
    }
}
