<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\TotalCpuCountController;

// 인덱스 페이지    
Route::get('/', [IndexController::class, 'index']);

// CPU 리스트 페이지
Route::get('/cpu_list', [CpuController::class, 'index']);

// 디바이스 리스트 페이지 (컨트롤러가 있다면)
Route::get('/device_list', [DeviceController::class, 'index']);

// 전체 CPU 수
Route::get('/cpu-count', [TotalCpuCountController::class, 'index']);

     