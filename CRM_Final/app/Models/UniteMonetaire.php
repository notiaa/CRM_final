<?php

namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniteMonetaire extends Model
{
    use HasFactory;

    protected $table = 'uniteMonetaire';
    protected $fillable = [
        'unite',
        'etat',
    ];

    public static function getAllUniteMonetaire(){
        $select=DB::select('select * from uniteMonetaire');
        return self::hydrate($select);
    }
}
