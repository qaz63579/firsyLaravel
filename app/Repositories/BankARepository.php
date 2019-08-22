<?php 
namespace app\Repositories;

use App\BankAReceipt;

class BankARepository
{
	public function tt1()
	{
		# code...
		return BankAReceipt::All();
	}

	public function BankAcheck($user_id)
	{
		$data = BankAReceipt::where('user_id',$user_id)->sum('money');
		# code...
		return $data;
	}

	public function BankAinsert($user_id,$money)
	{
		$post = new BankAReceipt;
	    $post->user_id = $user_id;
	    $post->money = $money;
	    $post->save();
		return 'success';
	}


}










