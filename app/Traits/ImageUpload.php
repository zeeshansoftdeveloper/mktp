<?php
namespace App\Traits;
use Image;
use Storage;

trait ImageUpload
{
    public function saveImages($file, $folder)
    {
        $file_name = time().'-'.$file->getClientOriginalName();

        if(!Storage::exists($folder)) {
            Storage::makeDirectory($folder, 0777, true); //creates directory            
        }

        $img = Image::make($file)->resize(500,500)->encode();
        //Provide the file name with extension 
        $filename = time(). '.' .$file->getClientOriginalExtension();
       //Put file with own name
       Storage::put($filename, $img);
       //Move file to your location 
       Storage::move($filename, $folder. '/' . $filename);
            
        return $folder . $file_name;
    }
}