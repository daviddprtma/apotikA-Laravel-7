<?php

namespace App\Http\Controllers;

use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;
class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Transaction::all();
        return view('transaction.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
        return view('transaction.show',compact('transaction'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }

    // public function showAjax(Request $request)
    // {
    //     $id=$request->id;

    //     return response()->json(array(
    //         'msg'=>$id
    //     ),200);
    // }

    public function showAjax2($id)
    {
        $data=Transaction::find($id);
        $medicines=$data->medicines;
        return response()->json(array(
            'msg'=>view('transaction.showdetail',compact('data','medicines'))->render()
        ),200);
    }

    public function submit_front(){
        $this->authorize('checkmember');

        $cart = session()->get('cart');
        $user = Auth::user();
        $t = new Transaction;
        $t->buyer_id = $user->id;
        $t->user_id = 1;
        $t->transaction_date = Carbon::now()->format('Y-m-d H:i:m');
        $t->save();

        $totalHarga = $t->insertProduct($cart,$user);
        $t->total = $totalHarga;
        $t->save();

        session()->forget('cart');
        return redirect('/');
    }

    public function print_detail($id){
        $transaction=Transaction::find($id);
        $pdf = PDF::loadview('transaction.detailpdf',['transaction'=>$transaction]) -> setOptions(['defaultFont'=>'sans-serif']);
        $name = "laporan-pemesanan".$transaction->id.$transaction->transaction_date.".pdf";
        return $pdf->download($name);
    }

    public function mostbuycustomer(){
        $data = Transaction::select('u.id', 'u.name', DB::raw('IFNULL(sum(transactions.total),0) as totalpembeli'))
        ->rightjoin('users as u','u.id','=','user_id')
        ->groupBy('user_id')
        ->orderBy('totalpembeli','DESC')
        ->take(3)
        ->get();

        return view('report.mostbuycustomer',['data'=>$data]);
    }
}
