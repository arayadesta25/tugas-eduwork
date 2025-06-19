<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CategoryProduct;

class product extends Model
{
    public function category()
    {
        return $this->belongsTo(CategoryProduct::class,);
    }
}
