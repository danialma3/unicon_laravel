<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ScanController extends Controller
{
    public function scan()
    {
        $title = "Halaman Scan";
        return view('scan.index', compact('title'));
    }

    public function cek_data($id)
    {

        $data = Order::where(['status' => 'paid', 'order_id' => $id])->first();

        return $data->toJson();
    }
}
