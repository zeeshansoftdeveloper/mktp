<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Service;
use \Milon\Barcode\DNS2D;

class WelcomeController extends Controller
{
    public function index()
    {
        $stores = Store::with('store_images')->take(12)->get();
        $services = Service::with('store')->take(12)->get();
        return view('welcome', compact('stores', 'services'));
    }

    public function showMap()
    {
        return view('map');
    }

    public function bcode()
    {
        $bc = new DNS2D();
        return view('bc', compact('bc'));
    }
}
