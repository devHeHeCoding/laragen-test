<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar682352345;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar682352345.index');
    }

    public function create()
    {
        return view('admin.testcar682352345.create');
    }

    public function edit(TestCar682352345 $testCar682352345)
    {
        return view('admin.testcar682352345.edit', compact('testCar682352345'));
    }

    public function show(TestCar682352345 $testCar682352345)
    {
        return view('admin.testcar682352345.show', compact('testCar682352345'));
    }
}
