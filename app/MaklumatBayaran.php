<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaklumatBayaran extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'namapenuh', 'nomborkad', 'tarikhbayaran', 'jumlah', 'bayar', 
    ];
    
    protected $table = 'maklumat_bayaran';

    public function user(){
        return $this->belongsTo(User::class);
    }
}
