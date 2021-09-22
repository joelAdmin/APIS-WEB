<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    protected $table = 'viajes';
    protected $primaryKey = 'id';
    protected $fillable = ['fechaviaje', 
                                'pais', 
                                    'ciudad', 
                                        'cliente_id'];
    protected $guarded = ['id'];

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }
}
