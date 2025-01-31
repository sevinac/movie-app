<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Review extends Model
{
  protected $fillable = ['movie_id', 'user', 'rating', 'date'];
    use HasFactory;
     public function movie()
    {
      return $this->belongsTo(Movie::class,'movie_id');
    }
}