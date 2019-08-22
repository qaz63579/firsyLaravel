<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Repositories\BankARepository;

class BankController extends Controller
{
    protected $BankRepo;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bankAcheck(Request $request)
    {
        //
        $user = $request->input('user');
        $results = DB::select('select sum(money) as sum from BankAReceipt where user_id = ?',[$user]);
        $results = json_encode($results);
        $results = json_decode($results, true);
        #dd($results);
    return $results[0]['sum'];    
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bankBcheck(Request $request)
    {
        //
        $user = $request->input('user');
        return 'hello' . ' ' . $user;
    }

    public function bankAinsert(Request $request)
    {
        //
        $user = $request->input('user');
        return 'hello' . ' ' . $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bankBinsert(Request $request)
    {
        //
        $user = $request->input('user');
        return 'hello' . ' ' . $user;
    }
    //--------------------------------------------------------------------------------

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
        $data = $this->BankRepo->BankAcheck($user);

        $str = 'user =' . $user . '   data =' . $data;


        return $str;

    }
    public function tt3(Request $request)
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
