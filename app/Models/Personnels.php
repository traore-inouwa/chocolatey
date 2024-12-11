<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnels extends Model
{
    use HasFactory;
    protected $table='personnels';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'firstname', 'mobile', 'email'];
}
