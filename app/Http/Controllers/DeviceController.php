<?php

namespace App\Http\Controllers;

use App\Models\Mdl;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        // Eloquent로 디바이스 리스트 가져오기
        $devices = Mdl::orderBy('id_device', 'asc')->get();

        // Blade 뷰에 데이터 전달
        return view('modules.box.cpu.module_box-device_list', compact('devices'));
    }
}
