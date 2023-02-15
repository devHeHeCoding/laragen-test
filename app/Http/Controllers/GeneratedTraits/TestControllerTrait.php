<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1305333820;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1305333820.index');
    }

    public function create()
    {
        return view('admin.testcar1305333820.create');
    }

    public function edit(TestCar1305333820 $testCar1305333820)
    {
        return view('admin.testcar1305333820.edit', compact('testCar1305333820'));
    }

    public function show(TestCar1305333820 $testCar1305333820)
    {
        return view('admin.testcar1305333820.show', compact('testCar1305333820'));
    }
}
