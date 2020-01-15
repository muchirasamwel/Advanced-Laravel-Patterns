<?php

namespace App\Repositories;

interface MyInterface
{
    public function getAll();
    public function encrypt($data);
    public function decrypt($data);
    public function sayHi();

}
