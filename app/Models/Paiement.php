<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_tab',
        'date',
        'montant',
        'meth_paie',
        'stat_paie',

        
    ];
}
