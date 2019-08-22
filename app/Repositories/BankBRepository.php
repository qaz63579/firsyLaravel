<?php 
namespace app\Repositories;

use App\BankBReceipt;
use App\BankBUser;

class BankBRepository
{
	public function tt1()
	{
		# code...
		return BankAReceipt::All();
	}

	public function BankBcheck($user_id)
	{
		$data = BankBUser::where('id',$user_id)->get();
		# code...
		return $data;
	}

	public function BankBinsert($user_id,$money)
	{
		$post = new BankBReceipt;
	    $post->user_id = $user_id;
	    $post->money = $money;
	    $post->save();

	    $data = BankBReceipt::where('user_id',$user_id)->sum('money');
		$user_table = BankBUser::find($user_id);
		$user_table->money = $data;
		$user_table->save();
		return 'success';
	}


}










