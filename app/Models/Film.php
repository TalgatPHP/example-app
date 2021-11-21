<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Film extends Model
{
    use HasFactory;

    protected $fillable=['title','status','poster'];
    public $timestamps=false;
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function scopeLastLimit($query, $numbers)
    {
        return $query->with('genres')->orderBy('id')->limit($numbers)->get();
    }

    public function scopeAllPaginate($query, $numbers)
    {
        return $query->with('genres')->orderBy('id')->paginate($numbers);
    }

    public function scopeFindById($query,$id)
    {
        return $query->with('genres')->where('id',$id)->firstOrFail();
    }
    public function scopeFindByGenre($query)
    {
        return $query->with('genres')->paginate(10);
    }
}
