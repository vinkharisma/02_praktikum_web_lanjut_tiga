<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function edu() {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }
    public function friends() {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }
    public function riri() {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }
    public function kolak() {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }
}
