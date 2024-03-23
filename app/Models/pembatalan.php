<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembatalan extends Model
{
    use HasFactory;
    protected $table = 'pembatalans';
    protected $primaryKey = 'id_pembatalan';
    protected $quard = 'id_pembatalan';
    protected $hidden = '';
}
