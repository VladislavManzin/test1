<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ShowOne($id) {
        $p = App\Models\product::find($id);
        return $p;
    }
}
