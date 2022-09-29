<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use DateTime;

class Specialist extends Model
{
    use HasFactory;

    /**
     * @return array|null
     */

    public function specialistsList () {
        $db = DB::table('specialists')->get();
        $specialists = [];
        foreach ($db as $value) {

            /**
             * Опыт
             */
            $start_exp = $value->start_exp;
            $dateDiff = date_diff(new DateTime(), new DateTime($start_exp))->days;

            if ($dateDiff > 365) {
                $exp = $dateDiff / 365;
            } elseif ($dateDiff < 365 and $dateDiff > 30) {
                $exp = $dateDiff / 12;
            } elseif ($dateDiff < 30) {
                $exp = $dateDiff;
            }



            /**
             * Возврат каждого специалиста в массив $specialists
             */
            $specialists[$value->id] = [
                'name' => $value->name,
                'img' => $value->img,
                'type' => $value->type,
                'exp' => $exp,
                'pre-text' => $value->pre_text,
                'full-text'=> $value->full_text,
                'verifed' => $value->verifed,
            ];
        }
        return $specialists ?? null;
    }
}
