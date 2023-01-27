<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1344572460;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1344572460.index');
    }

    public function create()
    {
        return view('admin.testcar1344572460.create');
    }

    public function edit(TestCar1344572460 $testCar1344572460)
    {
        return view('admin.testcar1344572460.edit', compact('testCar1344572460'));
    }

    public function show(TestCar1344572460 $testCar1344572460)
    {
        return view('admin.testcar1344572460.show', compact('testCar1344572460'));
    }
}
