<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function clients()
    {
    	return $this->hasMany('App\Models\Client');
    }

    public function childs()
    {
    	return $this->hasMany(Category::class, 'parent_id');
    }
}
