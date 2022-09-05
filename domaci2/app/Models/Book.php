<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'year',
        'publisher',
        'number_of_copy',
    ];
    
    public function author(){
        return $this->belongsTo(Author::class);
    }
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }

}
