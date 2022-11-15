<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Investor;


class InvestorController extends Controller
{




    public function index()
    {
        $investors = Investor::orderBy('name')->get();
        return view ('investors.index', ['investors'=> $investors]);
    }



    public function create(){
        return view ('investors.create');
    }

    public function confirm(Investor $investor){
        return view ('investors.confirm',[
            'investor' => $investor

        ]);

    }



    public function edit(Investor $investor){

        return view ('investors.edit',[
            'investor' => $investor
        ]);
    }

    public function update(Request $request, $investor){
        $input = $request->all();
        $investor = Investor::find($investor);
        $investor->name=$input['name'];
        $investor->address=$input['address'];
        $investor->phone=$input['phone'];
        $investor->investment=$input['investment'];



        $investor->save();
        return redirect('/');
    }

    public function delete($investor){
        Investor::find($investor)->delete();
        return redirect('/');
    }



    public function store(Request $request){
        $this->validate($request, [

            'name'=> 'required',
            'address'=> 'required',
            'phone'=> 'required',
            'investment'=> 'required',
        ]);

        Investor::create([

            'name' => $request['name'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'investment' => $request['investment'],
        ]);

        return redirect ('/')->with('info', 'A new investor has beed created');

    }
}
