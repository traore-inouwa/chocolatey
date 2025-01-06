<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serveur_cuis extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_tab',
        'name_personnel',
        'nourriture',
        'date',
        
    ];

    
}
