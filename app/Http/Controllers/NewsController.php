<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id = null) {
        if ($id = null) echo '<a href = "https://www.educastudio.com/news"></a>';
        else  echo '<a href = "https://www.educastudio.com/news">'. $id .'</a>';
    }
}
