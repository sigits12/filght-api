<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
	protected $table = 'flights';

	protected $primaryKey = 'flightNumber';

	protected $dateFormat = 'c';

 	protected $fillable = ['flightNumber', 'departurePort', 'arrivalPort', 'departureTime', 'arrivalTime'];

}
