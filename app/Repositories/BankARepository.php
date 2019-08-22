<?php 
namespace app\Repositories;

use App\BankAReceipt;
use App\BankAUser;

class BankARepository
{
	public function tt1()
	{
		# code...
		return BankAReceipt::All();
	}

	/*
	test for update User's money
	*/

	public function tt2($user_id)
	{
		# code...
		$data = BankAReceipt::where('user_id',$user_id)->sum('money');
		$user_table = BankAUser::find($user_id);
		$user_table->money = $data;
		$user_table->save();

		return $user_table;
	}

	public function BankAcheck($user_id)
	{
		$data = BankAUser::where('id',$user_id)->get();
		# code...
		return $data;
	}

	public function BankAinsert($user_id,$money)
	{
		$post = new BankAReceipt;
	    $post->user_id = $user_id;
	    $post->money = $money;
	    $post->save();

	    $data = BankAReceipt::where('user_id',$user_id)->sum('money');
		$user_table = BankAUser::find($user_id);
		$user_table->money = $data;
		$user_table->save();

		return 'success';
	}


}










