<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    // Relatie vastleggen met games
    public function games()
    {
        return $this->hasMany('\App\Game');
        // Dit gaat op zoek naar de regels waarbij publisher_id overeenkomt met de id van de data in deze model
    }
}
