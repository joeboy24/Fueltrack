<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pump extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','fuel_type','pump_name','tank_id','cur_level','status'
    ];

    public function tank(){
        return $this->belongsTo('App\Models\Tank');
    }
    
}
