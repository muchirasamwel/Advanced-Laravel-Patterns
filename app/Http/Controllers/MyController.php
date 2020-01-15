<?php
namespace App\Http\Controllers;

use App\Repositories\MyInterface;
use App\Repositories\MyRepository;


class MyController extends Controller
{
    public $myRepository;
    public $myRepository2;
    public $myRepository3;

    public function __construct(MyInterface $myRepository)
    {
        $this->myRepository=$myRepository;
        $var = MyRepository::getInstance();
        $this->myRepository2=$var;
        $this->myRepository3=$var;
    }
    public function index(){

        return view('welcome')->with(['data'=>$this->myRepository->getAll()]);
    }
    public function encoded(){
        $data=$this->myRepository->encrypt($this->myRepository2->getAll());
        return view('welcome')->with(['results'=>$data,'data'=>null]);
    }
}

