<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\StoreImage;
use App\Traits\ImageUpload;


class StoreImageController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $stores = Store::select('id', 'store_name')->get();
        return view("store_image.create", compact('stores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            $ban_folder = 'public/stores/'.$request->store_id."/banner/";
            $lgo_folder = 'public/stores/'.$request->store_id."/logo/";
            
            // Upload image
            $banPath = $this->saveImages($banner, $ban_folder);
            $lgoPath =  $this->saveImages($logo, $lgo_folder);
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
