<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class frontAdBanner extends Model{
    use SoftDeletes;
    protected $table  = 'front_ad_banner';

    // public function category() {
    //     // return $this->hasOne(Category::class, 'parent_id', 'id') 
    //     $dd = $this->hasOne(Category::class, 'parent_id', 'id');
    //     dd("sd",$dd);
    // }
}
