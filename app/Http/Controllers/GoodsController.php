<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\status;
use App\Good;
use DB;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


$employees = DB::table('goods')
        ->leftJoin('statuses', 'goods.status_id', '=', 'status_id')
        ->leftJoin('customers', 'goods.customer_id', '=', 'customer_id')
        
        ->select('goods.*', 'statuses.title as status_title', 'statuses.id as status_id',
         'customers.name as customer_name', 'customers.id as customer_id')
        ->paginate(5);


        $customer = Customer::all();
        $status = Status::all();
        $good = Good::all();

        return view('goods.index',compact('customer','status','good'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customer = Customer::all();
        $status = Status::all();
        $good = Good::all();

        return view('goods.create',compact('customer','status','good'));  
      }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $good = new Good();
        $good->code =$this->generate();
        $good->destination = $request->destination;
        $good->customer_id    = $request->customer_id;
        $good->reciever    = $request->reciever;
        $good->time = $request->time;
        $good->date = $request->date;
        $good->item = $request->item;
        $good->quantity = $request->quantity;
        $good->status_id    = $request->status_id;
        $good -> save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $good = Good::find($id);
            $customer = Customer::all();
            $status = Status::all();

        return view('goods.edit')->with([
            'customer'=> $customer,
            'status'=> $status,
            'good'=> $good,


]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  Good $good)
    {
        $good->update($request->all());
  
        return redirect()->route('goods.index')
                        ->with('success','customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        good::find($id)->delete();
        return back();
    }
        public function generate()
    {
        $random = substr(str_shuffle(str_repeat($x='00123456789', ceil(6/strlen($x)))),1,6);
        return $random;
    }
}
