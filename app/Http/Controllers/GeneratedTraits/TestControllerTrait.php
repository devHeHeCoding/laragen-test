<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1879614189;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1879614189.index');
    }

    public function create()
    {
        return view('admin.testcar1879614189.create');
    }

    public function edit(TestCar1879614189 $testCar1879614189)
    {
        return view('admin.testcar1879614189.edit', compact('testCar1879614189'));
    }

    public function show(TestCar1879614189 $testCar1879614189)
    {
        return view('admin.testcar1879614189.show', compact('testCar1879614189'));
    }
}
