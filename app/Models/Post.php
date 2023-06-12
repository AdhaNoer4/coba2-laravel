<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body']; //yg boleh di isi hanya yg ada di array
    protected $guarded = ['id']; //yg gk boleh di isi, sisanya boleh

    public function category()
    {
        // hubungkan class Post ke category 
        return $this->belongsTo(Category::class); // belongsTo = one to one (relationship eloquent/databases)
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
