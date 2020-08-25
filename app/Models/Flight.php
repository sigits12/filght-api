<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
	protected $table = 'flights';

	protected $primaryKey = 'flightNumber';

	protected $keyType = 'string';

	public $incrementing = false;

	protected $dateFormat = 'c';

 	protected $fillable = ['flightNumber', 'airline', 'departurePort', 'arrivalPort', 'departureTime', 'arrivalTime'];

 	public function port()
    {
        return $this->belongsTo('App\Models\Port', ['departurePort', 'arrivalPort']);
    }

}
