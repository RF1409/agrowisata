<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cettani extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function tani()
    {
        return $this->hasMany(Tani::class);
    }

    public function transaksi()
    {
    return $this->hasMany(Transaksi::class);
    }
}
