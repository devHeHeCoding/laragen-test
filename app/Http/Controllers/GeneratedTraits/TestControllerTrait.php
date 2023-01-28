<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1090882700;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1090882700.index');
    }

    public function create()
    {
        return view('admin.testcar1090882700.create');
    }

    public function edit(TestCar1090882700 $testCar1090882700)
    {
        return view('admin.testcar1090882700.edit', compact('testCar1090882700'));
    }

    public function show(TestCar1090882700 $testCar1090882700)
    {
        return view('admin.testcar1090882700.show', compact('testCar1090882700'));
    }
}
