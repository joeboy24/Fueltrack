<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'user_id','pump_id','day','opening1','opening2','closing1','closing2','sales','remarks','status'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function pump(){
        return $this->belongsTo('App\Models\Pump');
    }

}
