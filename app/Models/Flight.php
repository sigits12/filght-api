 <?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';

    protected $primaryKey = 'flightNumber';

    protected $dateFormat = 'c';

}
