<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    public function index($id)
    {
        $store = Store::with('services', 'store_images')->where("id", "=", $id)->get();
        return view("stores.show", compact('store'));
    }
}
