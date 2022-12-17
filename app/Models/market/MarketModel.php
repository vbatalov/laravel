<?php

namespace App\Models\market;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MarketModel extends Model
{
    use HasFactory;

    public function getCategory() {

        function getAllParent(): array
        {
            return DB::table('market_categories_parent')->get()->all();
        }

        function getAllCategories(): array
        {
            return DB::table('market_categories')->get()->all();
        }
    }

    public function createAd (Int $category, Int $user, String $text = null, $media = null) {
        $market_list_item = DB::table('market_list')->insert([
            "category" => $category,
            "user" => $user
        ]);
    }
}
