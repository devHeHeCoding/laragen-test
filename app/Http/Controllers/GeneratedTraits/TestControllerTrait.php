<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1196383960;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1196383960.index');
    }

    public function create()
    {
        return view('admin.testcar1196383960.create');
    }

    public function edit(TestCar1196383960 $testCar1196383960)
    {
        return view('admin.testcar1196383960.edit', compact('testCar1196383960'));
    }

    public function show(TestCar1196383960 $testCar1196383960)
    {
        return view('admin.testcar1196383960.show', compact('testCar1196383960'));
    }
}
