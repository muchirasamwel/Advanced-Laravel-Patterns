<?php
namespace App\Repositories;
use Illuminate\Support\Facades\Crypt;

Class MyRepository implements MyInterface
{
    protected static $instance;
    public static function getInstance()
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }
    public function __construct()
    {
        echo "<script>console.log('Instance created')</script>";
    }

    public function encrypt($data)
    {
        echo "<script>console.log('Encrypt data Called from repository')</script>";

        return Crypt::encrypt($data);
    }
    public function decrypt($data)
    {
        return Crypt::decrypt($data);
    }
    public function getAll()
    {
        echo "<script>console.log('Get All Called form Repository')</script>";
        $object= [
            (object)[
            "name"=>"Yaash",
            "skill"=>"laravel"],
            (object)[
            "name"=>"Palma",
            "skill"=>"PHP"],
            (object)[
                "name"=>"Wush",
                "skill"=>"Vue"]
        ];
        return $object;
    }
    public function sayHi()
    {
        return "Hi There";
    }

}
