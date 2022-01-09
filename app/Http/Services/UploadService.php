<?php


namespace App\Http\Services;

use Illuminate\Http\Request;

class UploadService
{
    public function store(Request $request)
    {
        if($request->has('file')){
            try {
                $name = time().'--'.$request->file('file')->getClientOriginalName();
                $pathFull = 'uploads/'.date('Y/m/d');
                $request->file('file')->storeAs(
                    'public/'.$pathFull, $name
                );
                return '/storage/'.$pathFull.'/'.$name;
            }catch (\Exception $error){
                return false;
            }
        }
    }
}
