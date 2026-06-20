<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'mail','phone','street','avenue'];

    public function credit()
    {
        return $this->hasMany(credit::class);
    }
}
