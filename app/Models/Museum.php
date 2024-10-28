<?php

namespace App\Models;

use App\Models\Opera;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Museum extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','location','siteWeb'
    ];
    public function operas(){
        return $this->hasMany(Opera::class);
    }
}
