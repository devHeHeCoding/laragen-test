<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1949212830;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1949212830.index');
    }

    public function create()
    {
        return view('admin.testcar1949212830.create');
    }

    public function edit(TestCar1949212830 $testCar1949212830)
    {
        return view('admin.testcar1949212830.edit', compact('testCar1949212830'));
    }

    public function show(TestCar1949212830 $testCar1949212830)
    {
        return view('admin.testcar1949212830.show', compact('testCar1949212830'));
    }
}
