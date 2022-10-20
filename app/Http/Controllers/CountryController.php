<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::paginate('6');

        return view('countries', compact('country'));
    }

    public function countryWithoutAirlinesAirports(){
        $country = Country::paginate('6');

        return view('country_w_airlines_airports', compact('country'));
    }

    public function countryWithoutAirline(){
        $country = Country::paginate('6');

        return view('countries_without_airlines', compact('country'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_country');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {
        $validate = $request -> validate([
            'country_name' => 'required|max:20',
            'country_ISO' => 'required|max:3',
        ]);

        Country::create([
            'country_name' => request('country_name'),
            'country_ISO' => request('country_ISO'),
        ]);

        return redirect('/countries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        $country = Country::paginate('6');

        return view('countries', compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        return view('edit_country', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        // $request -> validate([

        // ]);

        Country::where('id', $country -> id)-> update($request->only(['country_name', 'country_ISO']));
        return redirect('/countries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        $country -> delete();
        return redirect('/countries');
    }
}
