<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barang";
    
    protected $filllable=['kode','nama','deskripsi','stok','harga','berat'];
}
