<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FlightController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function index()
	{
		return response()->json(Flight::paginate(10));
	}

	public function store(Request $request)
	{
		$this->validate($request, [
 			'flightNumber' => 'required',
 			'airline' => 'required',
 			'departurePort' => 'required',
 			'arrivalPort' => 'required',
 			'departureTime' => 'required',
 			'arrivalTime' => 'required'
        ]);

		$object = Flight::create($request->all());
		return response($object, 201);
	}

}
