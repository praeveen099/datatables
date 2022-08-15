<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\DataTables\PostsDataTable;


class Post extends Model
{
    use HasFactory;

    protected $table = "posts";
    // protected $fillable = [];

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
