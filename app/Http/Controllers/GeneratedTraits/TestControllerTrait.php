<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1780273142;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1780273142.index');
    }

    public function create()
    {
        return view('admin.testcar1780273142.create');
    }

    public function edit(TestCar1780273142 $testCar1780273142)
    {
        return view('admin.testcar1780273142.edit', compact('testCar1780273142'));
    }

    public function show(TestCar1780273142 $testCar1780273142)
    {
        return view('admin.testcar1780273142.show', compact('testCar1780273142'));
    }
}
