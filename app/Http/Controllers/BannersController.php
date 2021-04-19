<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Handlers\ImageUploadHandler;

class BannersController extends Controller
{
    public function showBanner()
    {
        return view('pages.banner');
    }

    public function setBanner(Request $request, ImageUploadHandler $uploader, Banner $banner)
    {
        $data = $request->all();

        if ($request->pic) {
            $result = $uploader->save($request->pic, 'banners', 'bn');
            if ($result) {
                $data['url'] = $result['path'];
            }
        }

        $banner->update($data);
        return redirect()->route('showBanner')->with('success', '上传成功！');;
    }
}
