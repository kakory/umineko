<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Handlers\ImageUploadHandler;

class BannersController extends Controller
{
    public function index()
    {
        $banners = Banner::paginate(1);
        return view('banners.index', compact('banners'));
    }

    public function store(Request $request, ImageUploadHandler $uploader, Banner $banner)
    {
        if ($request->pic) {
            $result = $uploader->save($request->pic, 'banners', 'bn');
            if ($result) {
                $banner = Banner::create([
                    'url' => $result['path']
                ]);
                return redirect()->route('banners.index')->with('success', '上传成功！');
            }
        }
        return redirect()->route('banners.index')->with('danger', '上传失败！');
    }

    public function update(Request $request, ImageUploadHandler $uploader, Banner $banner)
    {
        $data = $request->all();

        if ($request->pic) {
            $result = $uploader->save($request->pic, 'banners', 'bn');
            if ($result) {
                $data['url'] = $result['path'];
            }
        }

        $banner->update($data);
        return redirect()->route('banners.index')->with('success', 'banner更新成功！');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        session()->flash('success', '成功删除banner！');
        return back();
    }
}
