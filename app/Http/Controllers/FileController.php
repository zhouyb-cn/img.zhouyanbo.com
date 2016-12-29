<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class FileController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('file');
        if ($file->isValid()) {
            $entension = $file->getClientOriginalExtension();
            $realPath  = $file->getRealPath();
            $md5       = md5_file($realPath);
            $fileName  = base_convert($md5, 16, 36).'.'.$entension;
			return back()->with(['data' => $fileName]);
            // 一级目录
            // $firstLevelDir = base_convert((int)base_convert(substr($md5, -4), 16, 10) & (int)base_convert('1fff', 16, 10), 10, 16);
            // $secondLevelDir = base_convert((int)base_convert(substr($md5, -8, 4), 16, 10) & (int)base_convert('1fff', 16, 10), 10, 16);
            // if (! $files->exists(dirname(public_path().'/'.$firstLevelDir.'/'.$secondLevelDir.'/'.$fileName))) {
            //     $res = $files->makeDirectory(dirname(public_path().'/'.$firstLevelDir.'/'.$secondLevelDir.'/'.$fileName), 0777, true, true);
            // }
            // $file->move('./'.$firstLevelDir.'/'.$secondLevelDir.'/', $fileName);
            // $path = '/chat/voice/'.$new_name;
            // return array('code' => 10000, 'msg' => '文件上传成功', 'url' => '/'.$firstLevelDir.'/'.$secondLevelDir.'/'.$fileName);
        } else {
            return array('code' => 10001, 'msg' => '文件上传失败');
        }
    }
}
