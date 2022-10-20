<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use App\Models\Country;
use App\Http\Requests\StoreAirlineRequest;
use App\Http\Requests\UpdateAirlineRequest;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airline = Airline::paginate('6');

        return view('airlines', compact('airline'));
    }

    public function addAirline()
     {
         return view('add_airline');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::All();

        return view('new_airline', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAirlineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAirlineRequest $request)
    {

        $validate = $request -> validate([
            'airline_name' => 'required|max:40',
            'country_name' => 'required|max:20',
            // 'country_ISO' => 'required',
            // 'country_id' => 'required',
        ]);

        Airline::create([
            'airline_name' => request('airline_name'),
            'country_name' => request('country_name'),
            // 'country_ISO' => request('country_ISO'),
            // 'country_id' => request('country_id'),
        ]);

        // if (Country::where('id', '=', request('country_id') )->exists() )
        // {

        // }
        // else{
        //     return view('denied');
        // }

        return redirect('/airlines');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline)
    {
        $airline = Airline::paginate(6);


        return view('airlines', compact('airline'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline)
    {
        $country = Country::All();

        return view('edit_airline', compact('airline', 'country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAirlineRequest  $request
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAirlineRequest $request, Airline $airline)
    {
        Airline::where('id', $airline -> id)-> update($request->only(['airline_name', 'country_name', 'country_ISO']));

        return redirect('/airlines');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $airline)
    {
        $airline -> delete();
        return redirect('/airlines');
    }
}
