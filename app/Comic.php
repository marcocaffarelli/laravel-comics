<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'body', 'cover', 'art_by', 'written_by', 'series', 'price', 'on_sale_date', 'volume', 'trim_size', 'page', 'rated'];
}
