<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\StoreImage;
use App\Traits\ImageUpload;


class StoreImageController extends Controller
{
    use ImageUpload;

    public function index()
    {
        $store_image = StoreImage::paginate(20);
        return view("store_image.index", compact('store_image'));
    }

    public function newIndex()
    {
        $store_image = StoreImage::paginate(20);
        return view("store_image.index", compact('store_image'));
    }

    public function create()
    {
        $stores = Store::select('id', 'store_name')->get();
        return view("store_image.create", compact('stores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'store_id'              =>  'required',
            'banner'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $storeImage = new StoreImage;
        if ($request->has('banner') && $request->has('logo')) {
            // Get image file
            $banner = $request->file('banner');
            $logo = $request->file('logo');

            // Define folder path
            $ban_folder = 'stores/'.$request->store_id."/banner/";
            $lgo_folder = 'stores/'.$request->store_id."/logo/";
            
            // Upload image
            $banPath = $this->saveImages($banner, $ban_folder, 1000);
            $lgoPath =  $this->saveImages($logo, $lgo_folder, 200);
            // Set user profile image path in database to filePath
            $matchThese = array('store_id'=>$request->store_id);
            StoreImage::updateOrCreate($matchThese,
                [
                    'store_id'=>$request->store_id,
                    'banner'=>$banPath,
                    'logo'=>$lgoPath
                ]
            );

            return redirect()->route('vendDash');
        }
    }

    public function edit($id)
    {
        $stores = Store::select('id', 'store_name')->get();
        $store_image = StoreImage::where('id', $id)->first();
        return view("store_image.edit", compact('stores', 'store_image'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'store_id'              =>  'required',
            'banner'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo'     =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $storeImage = new StoreImage;
        if ($request->has('banner') && $request->has('logo')) {
            // Get image file
            $banner = $request->file('banner');
            $logo = $request->file('logo');

            // Define folder path
            $ban_folder = 'stores/'.$request->store_id."/banner/";
            $lgo_folder = 'stores/'.$request->store_id."/logo/";
            
            // Upload image
            $banPath = $this->saveImages($banner, $ban_folder, 1000);
            $lgoPath =  $this->saveImages($logo, $lgo_folder, 200);
            // Set user profile image path in database to filePath
            $matchThese = array('store_id'=>$request->store_id, 'id'=>$request->store_image_id);
            StoreImage::updateOrCreate($matchThese,
                [
                    'store_id'=>$request->store_id,
                    'banner'=>$banPath,
                    'logo'=>$lgoPath
                ]
            );

            return redirect()->route('vendDash');
        }
    }
}