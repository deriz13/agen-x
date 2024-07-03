<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class OrderController extends Controller
{
    public function index()
    {
        $data['orders'] = Ticket::get();
        return view('admin.order.index',$data);
    }
}
