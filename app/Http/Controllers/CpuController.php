<?php

namespace App\Http\Controllers;

use App\Models\Mcl;
use Illuminate\Http\Request;

class CpuController extends Controller
{
    public function index()
    {
        // Eloquent로 CPU 리스트 가져오기
        $cpus = Mcl::orderBy('id_cpu', 'asc')->get();

        // Blade 뷰에 데이터 전달
        return view('modules.box.cpu.module_box-cpu_list', compact('cpus'));
    }
}
