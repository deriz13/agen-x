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
    public function edit($id)
    {
        $data['order'] = Ticket::findOrFail($id);
        return view('admin.order.edit',$data);
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'no_tlp' => 'required',
            'birthdate' => 'required|date',
        ]);

        try {

            $ticket = Ticket::find($id);
            $ticket->update([
                'name' => $request->name,
                'address' => $request->address,
                'no_tlp' => $request->no_tlp,
                'birthdate' => $request->birthdate,
            ]);
    
            return redirect(route('order.index'))
                ->withSuccess("Data berhasil diubah");
                
        } catch(\Exception $e) {
            return redirect()->back()->withError('Data gagal diubah');
        }
    }

    public function destroy($id)
    {
        try {
            $ticket = Ticket::find($id);
            $ticket->delete();
            return 'success';

        } catch (\Exception $e) {
            return 'failed';
        }
    }
}
