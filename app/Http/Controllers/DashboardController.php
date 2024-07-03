<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class DashboardController extends Controller
{
    public function index()
    {
        $data['unuseds'] = Ticket::where('used', 0)->get();
        $data['useds'] = Ticket::where('used', 1)->get();
        $data['countticket'] = Ticket::count();
        return view('admin.dashboard',$data);
    }
}
