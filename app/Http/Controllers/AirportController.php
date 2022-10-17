<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use App\Http\Requests\StoreAirportRequest;
use App\Http\Requests\UpdateAirportRequest;
use App\Models\Country;

class AirportController extends Controller
{

    public function redirecting(){
        return redirect('test');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airport = Airport::paginate('6');

        return view('test', compact('airport'));
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
     * @param  \App\Http\Requests\StoreAirportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAirportRequest $request)
    {
        //$fileName = NULL;

        $validate = $request-> validate([
            'airport_name' => 'required|max:40',
            'country_name' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            // 'country_id' => 'required',
        ]);
        Airport::create([
            'airport_name' =>request('airport_name'),
            'country_name' =>request('country_name'),
            'latitude' =>request('latitude'),
            'longitude' =>request('longitude'),
            // 'country_id' =>request('country_id'),
        ]);

        // if ( Country::where('id', '=', request('country_id') ) -> exists() ){
        // }
        // else{
        //     return view('denied');
        // }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airport $airport
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport)
    {
        $country = Country::paginate(6);
        $airport = Airport::paginate(6);

        return view('test', compact('airport', 'country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(Airport $airport)
    {
        $country = Country::All();
        return view('edit_airport', compact('airport', 'country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAirportRequest  $request
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAirportRequest $request, Airport $airport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AirportCont  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airport $airport)
    {
        $airport -> delete();
        return redirect('/');
    }
}
