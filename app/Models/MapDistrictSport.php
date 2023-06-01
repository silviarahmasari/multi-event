<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MapDistrictSport extends Model
{
    use HasFactory;
    protected $table = 'map_district_sports';
    protected $primaryKey = 'id';
    protected $fillable = [
        "id_sub_district",
        "id_sport",
        'group_name',
        'status',
    ];
    public $incrementing = true;
}
