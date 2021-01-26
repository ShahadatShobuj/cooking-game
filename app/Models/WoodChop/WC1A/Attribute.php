<?php

namespace App\Models\WoodChop\WC1A;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attribute extends Model
{
    use HasFactory;

    protected $table = '1A_settings';
    protected $primaryKey  = 'id_settings';
    protected $guarded = [];
    protected $connection = 'mysql2';
    public $timestamps = false;
    protected $casts = [
        'create_time' => 'datetime:Y-m-d',
        'update_time' => 'datetime:Y-m-d',
    ];
}
