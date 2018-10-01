<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MaklumatTanggungan extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'namapenuh', 'nomborkad', 'tangnama', 'tangumur', 'tangkp', 'tanghubungan', 
    ];

    protected $table = 'maklumat_tanggungan';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
