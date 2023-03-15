<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model{
    
    use HasFactory;

    protected $fillable = [
        'cover',
        'name',
        'publisher',
        'user_id',
        

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }


}