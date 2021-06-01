<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class news_company extends Model
{
    use HasFactory;

    public function news(){
        return $this->belongsTo(News::class, 'news_id', 'id');
    }
    public function company(){
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }
}
