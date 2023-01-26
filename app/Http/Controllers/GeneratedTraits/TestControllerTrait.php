<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1006792630;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1006792630.index');
    }

    public function create()
    {
        return view('admin.testcar1006792630.create');
    }

    public function edit(TestCar1006792630 $testCar1006792630)
    {
        return view('admin.testcar1006792630.edit', compact('testCar1006792630'));
    }

    public function show(TestCar1006792630 $testCar1006792630)
    {
        return view('admin.testcar1006792630.show', compact('testCar1006792630'));
    }
}
