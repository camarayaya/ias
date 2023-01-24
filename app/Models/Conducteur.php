<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conducteur extends Model
{
    use HasFactory; 
    protected $fillable = [
        'nom','prenoms','contact_perso','nom_parent','contact_parent','permis_numero','vehicule_id'
    ];
    public function vehicule()
    { 
        return $this->belongsTo(Vehicule::class, 'vehicule_id');
    }

}  