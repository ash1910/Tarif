<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tariff;

class TariffController extends Controller
{
    //
    function show()
    {   
        //return Tariff::all();
        //return view('list');
        //return view('search');
        $data = Tariff::all();
        return view('tariff', ['dt' => $data]);
    }

    public function search(Request $request)
{
    $search = $request->input('table_search');
    $results = Tariff::where('DESCRIPTION', 'like', "%$search%")->get();

    return view('tarifflist', ['results' => $results]);
    //return view('tariffsearch', compact('results'));

}


    function showsearch(Request $request)
    {   
        $search = $request->input('table_search');
        if($search == null)
        {
            $results=$search;
            return view('searchtariff', ['results' => $results]);
        }
        else
        {
        $results = Tariff::where('DESCRIPTION', 'like', "%$search%")->get();
        return view('searchtariff', ['results' => $results]);

        //return view('searchtariff', compact('Tariff'));
        //return view('searchtariff');
        }

    }
}
