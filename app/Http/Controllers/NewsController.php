<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id = null) {
        if ($id = null) return redirect('https://www.educastudio.com/news');
        else return redirect('https://www.educastudio.com/news') . $id;
    }
}
