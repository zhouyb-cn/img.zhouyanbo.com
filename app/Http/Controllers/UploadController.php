<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class UploadController extends Controller
{
	public function upload(Request $request) {
		$file = $request->file('file');
		if($request->hasFile('file')) {
			if($file->isValid()) {
				$extension      = $file->getClientOriginalExtension();
				$realPath       = $file->getRealPath();
				$md5            = md5_file($realPath);
				$fileName       = $this->getFileName($md5, $extension);
				$firstLevelDir  = $this->getCatLogName($md5, 1);
				$secondLevelDir = $this->getCatLogName($md5, 2);
				$path = '/files/'.$firstLevelDir.'/'.$secondLevelDir.'/';
				if (! File::exists(dirname(public_path().$path.$fileName))) {
                 	$res = File::makeDirectory(dirname(public_path().$path.$fileName), 0755, true, true);
	            }
	            $file->move('.'.$path, $fileName);
	            return response(['code' => 0, 'msg' => '上传成功', 'file' => 'http://img.zhouyanbo.com'.$path.$fileName]);
			} else {
				return response(['code' => -1, 'msg' => '文件无效']);
			}
		} else {
			return response(['code' => -1, 'msg' => '文件不存在']);
		}
	}

	private function getFileName($md5, $extension) {
		return base_convert($md5, 16, 36).'.'.$extension;
	}

	private function getCatLogName($md5, $level = 1) {
		if($level == 1) {
			return base_convert((int)base_convert(substr($md5, -4), 16, 10) & (int)base_convert('1fff', 16, 10), 10, 16);
		} elseif ($level == 2) {
			return base_convert((int)base_convert(substr($md5, -8, 4), 16, 10) & (int)base_convert('1fff', 16, 10), 10, 16);
		}
	}
}
