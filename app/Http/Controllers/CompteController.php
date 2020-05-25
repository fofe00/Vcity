<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transactiontype;
use App\Transaction;
use App\Compte;
use function MongoDB\BSON\toRelaxedExtendedJSON;

class CompteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {
        $titre='home';
        return view('compte.home',compact('titre'));
    }

    public function water()
    {
        //recharge du compte water
        $transactionTypes=Transactiontype::all();
        $transactions=Transaction::all();
        return view('compte.water',compact('transactionTypes','transactions'));
    }

    public function ligth()
    {
        // recharge du compte ltgth
        $transactionTypes=Transactiontype::all();
        $transactions=Transaction::all();
        return view('compte.light',compact('transactionTypes','transactions'));
    }

    public function postligth(Request $request)
    {
        $this->validate($request, [
            'transtype' => 'required',
            'amount' => 'required|numeric',
        ]);
        DB::beginTransaction();
        try{
            $compte_id=Auth::user()->comptes()->where('typecompte_id', 2)->first();
            $transaction=new Transaction();
            $transaction->amount=request('amount');
            $transaction->transactiontype_id=request('transtype');
            $transaction->transactiontype_id=request('transtype');
            $transaction->compte_id=$compte_id;
            $transaction->save();
            DB::commit();

            Toastr::success('Operation successful', 'Success');
            return redirect()->route('type_disbursement.create');
        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('type_disbursement.create');
        }
    }
}
