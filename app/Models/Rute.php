<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    use HasFactory;
    protected $table = 'rutes';
    protected $primaryKey = 'id_rute';
    protected $quard = 'id_rute';
    protected $hidden = '';
}
