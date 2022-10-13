<?php

namespace App\Http\Controllers;

use App\Models\AirportCont;
use App\Http\Requests\StoreAirportContRequest;
use App\Http\Requests\UpdateAirportContRequest;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::All();

        return view('add_airport', compact('country'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAirportContRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAirportContRequest $request)
    {
        //$fileName = NULL;

        $validate = $request-> validate([
            'airport_name' => 'required|min:4|max:40',
            'country_name' => 'required',
            'country_ISO' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'country_id' => 'required',
        ]);

        if ( Country::where('id', '=', request('country_id') ) -> exists() ){
            AirportCont::create([
                'airport_name' =>request('airport_name'),
                'country_name' =>request('country_name'),
                'country_ISO' =>request('country_ISO'),
                'latitude' =>request('latitude'),
                'longitude' =>request('longitude'),
                'country_id' =>request('country_id'),
            ]);
        }
        else{
            return view('denied');
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AirportCont  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(AirportCont $airport)
    {
        $country = Country::paginate(6);
        $airportCont = AirportCont::paginate(6);

        return view('test', compact('airportCont', 'country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AirportCont  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(AirportCont $airport)
    {
        $country = Country::All();
        return view('edit_airport', compact('airportCont', 'country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAirportContRequest  $request
     * @param  \App\Models\AirportCont  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAirportContRequest $request, AirportCont $airport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AirportCont  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy(AirportCont $airport)
    {
        $airportCont -> delete();
        return redirect('/');
    }
}
