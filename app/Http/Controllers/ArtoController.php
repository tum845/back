<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use Novatree\Wallet\model\AccountModel;
use Novatree\Wallet\model\UserTotalBalance;

class ArtoController extends Controller
{
    public function user_profile ()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $accounts = AccountModel::where('user_id', $id)->get();
        $total_balance = UserTotalBalance::where('user_id',$id)->first();

        return  view('arto.detail')
        ->with(
            [
                'user' => $user,
                'accounts' => $accounts,
                'total_balance' => $total_balance,
            ]
        );
    }

    public function user_profile_add_fund ()
    {
        return  view('arto.add_fund');

    }

    public function user_profile_add_fund_store (Request $request)
    {
        $id = Auth::user()->id;
        $amount = $request->amount;

        $transaction =  \Wallet::createTransaction(1, 1, $amount, date('y-m-d H:i:s'), $id, 1);

        if($transaction){
            Flash::success('Add Fund successfully.');
           return redirect(route('arto.detail.account'));
        }else{

            Flash::danger('Someting wrong.');
            return redirect(route('arto.detail.account'));
        }


    }

   //Wallet::createTransaction

}
