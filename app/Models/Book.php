<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'Book_Title',
        'Book_Author',
        'Book_Print_Num',
        'Book_Price',
        'Book_description',
        'Book_Quantity',
        'Book_Img',
        'Book_Author_Img',
        'category_id',
    ];
}
