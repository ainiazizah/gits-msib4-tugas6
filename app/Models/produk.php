<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $guarded = ['id'];

    public function kategori()
    {
        return $this->hasOne(Kategori::class, 'id', 'id_kategori');
    }
    public function penjual()
    {
        return $this->hasOne(User::class, 'id', 'id_penjual');
    }
}
