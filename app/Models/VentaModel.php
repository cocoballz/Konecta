<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaModel extends Model
{
    use HasFactory;
    protected $table = 'ventas';
    protected $guarded = ['id','created_at','updated_at'];
}
