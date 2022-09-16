<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Companies extends Model
{
    use HasFactory;

    public $inn;

    public function fullInfo($inn) {
        $companies =  DB::table('companies')->where('inn', $inn)->get();

        foreach ($companies as $value) {
            $name = $value->name;
            $type = $value->type;
            $management_name = $value->management_name;
            $management_post = $value->management_post;
            $inn = $value->inn;
            $ogrn = $value->ogrn;
            $okpo = $value->okpo;
            $okato = $value->okato;
            $oktmo = $value->oktmo;
            $okogu = $value->okogu;
            $address = $value->address;
        }
        return [
            'name' => $name,
            'type' => $type,
            'management_name' => $management_name,
            'management_post' => $management_post,
            'inn'=> $inn,
            'ogrn' => $ogrn,
            'okpo' => $okpo,
            'okato' => $okato,
            'oktmo' => $oktmo,
            'okogu' => $okogu,
            'address' => $address,
        ];
    }
}
