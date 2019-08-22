<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BankARepository;

class BankAController extends Controller
{
    public function __construct(BankARepository $BankARepository)
    {
        $this->BankRepo = $BankARepository;
        # code...
    }

    public function tt1(Request $request)
    {
        //
        $data = $this->BankRepo->tt1();
        $user = $request->input('user');
        return response()->json(['status'=>0,'post'=>'success']);
        //return $data;
    }

    public function tt2(Request $request)
    {
        //
        $user = $request->input('user');
        $data = $this->BankRepo->tt2($user);
        $data = json_decode($data);
        return $data->user_id;
    }

    /*
    Check total money
    */
    public function check(Request $request)
    {
        //
        $user = $request->input('user');
        $data = $this->BankRepo->BankAcheck($user);
       // $data = json_encode($data);
        $data = json_decode($data,true);

        return $data[0]['user_id'] . ':' . $data[0]['money'] . '元';

    }
    /*
    insert money(+1)
    */
    public function insert(Request $request)
    {
        //
        $user = $request->input('user');
        $money = $request->input('money');
        $data = $this->BankRepo->BankAinsert($user,$money);

        //$str = 'user =' . $user .'  money= ' . $money .'   data =' . $data;

        $str = response()->json(['user'=>$user,'money'=>$money,'data'=>$data]);

        return $str;

    }  
}
