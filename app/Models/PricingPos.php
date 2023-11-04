<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricingPos extends Model
{
    use HasFactory;

    protected $table = 'pricing_pos';

    public $incrementing = false;
    public $timestamps = true;

    protected $fillable = [
        'id',
        'nama_pricingpos',
        'harga_pricingpos',
        'deskripsi_pricingpos',
    ];

}
