<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            "nama_awal" => "required",
            "nama_belakang" => "required",
            "tmpt_lahir" => "required",
            "tgl_lahir" => "required",
            "email" => "required",
            "nomor_hp" => "required",
            "alamat" => "required",
            "qty" => "required",
        ]);

        $result = Order::create([
            "nama_awal" => $request->nama_awal,
            "nama_belakang" => $request->nama_belakang,
            "tmpt_lahir" => $request->tmpt_lahir,
            "tgl_lahir" => $request->tgl_lahir,
            "email" => $request->email,
            "nomor_hp" => $request->nomor_hp,
            "alamat" => $request->alamat,
            "status" => NULL,
            "transaction_id" => NULL,
            "order_id" => NULL,
            "qty" => NULL,
            "gross_amount" => NULL,
            "payment_type" => NULL,
            "payment_code" => NULL,
            "pdf_url" => NULL,
        ]);
        // return dd($result->id);
        return redirect()->to("detail-order/$result->id")->with('status', 'Data Berhasil Dimasukan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view("assets.detail_order.form_tiket", compact("order"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
