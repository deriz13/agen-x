<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class LaporanController extends Controller
{
    public function index()
    {
        $data['reports'] = Ticket::get();
        return view('admin.report.index',$data);
    }
}
