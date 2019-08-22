<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\BankBRepository;

class BankBController extends Controller
{
    public function __construct(BankBRepository $BankBRepository)
    {
        $this->BankRepo = $BankBRepository;
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

    public function check(Request $request)
    {
        //
        $user = $request->input('user');
        $data = $this->BankRepo->BankBcheck($user);

        $data = json_decode($data,true);

        return $data[0]['user_id'] . ':' . $data[0]['money'] . '元';

    }
    public function insert(Request $request)
    {
        //
        $user = $request->input('user');
        $money = $request->input('money');
        $data = $this->BankRepo->BankBinsert($user,$money);

        //$str = 'user =' . $user .'  money= ' . $money .'   data =' . $data;

        $str = response()->json(['user'=>$user,'money'=>$money,'data'=>$data]);

        return $str;

    }  
}
