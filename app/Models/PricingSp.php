<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingSp extends Model
{
    use HasFactory;

    protected $table = 'pricing_sp';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'nama_pricingsp',
        'harga_pricingsp',
        'deskripsi_pricingsp',
    ];

}
