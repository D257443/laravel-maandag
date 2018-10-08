<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    // Voor het geval je je niet goed aan de naamconventies hebt gehouden en veel te laat achter dit probleem komt.
    protected $table = 'games';
    
    // Relatie vastleggen met publisher
    public function publisher()
    {
        return $this->belongsTo('\App\Publisher');
    }
}
