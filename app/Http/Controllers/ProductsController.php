<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products($id) {
        echo '<a href = "https://www.educastudio.com/category/marbel-edu-games">'. $id .'</a>';
    }
}
