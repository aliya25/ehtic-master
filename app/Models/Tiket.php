<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiket extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'no_pesanan',
        'section',
        'harga',
        'date_of_issue'
    ];
    protected $table = 'tiket';  
}