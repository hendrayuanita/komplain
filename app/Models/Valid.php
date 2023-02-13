<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valid extends Model
{
    use HasFactory;
    protected $guarded = [];
    public static function getData()
    {
        return self::join('komplains', 'komplains.id', '=', 'valids.id_komp')
            ->select('komplains.*', 'valids.*')
            ->get();
    }
}
