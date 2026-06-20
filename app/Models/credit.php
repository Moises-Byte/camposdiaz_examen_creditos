<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class credit extends Model
{
    use HasFactory;
    protected $fillable = ['monto', 'tipo_pago', 'plazo', 'clients_id'];

    public function clients()
    {
        return $this->belongsTo(clients::class,'clients_id');
    }
}
