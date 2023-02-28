<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1376813211;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1376813211.index');
    }

    public function create()
    {
        return view('admin.testcar1376813211.create');
    }

    public function edit(TestCar1376813211 $testCar1376813211)
    {
        return view('admin.testcar1376813211.edit', compact('testCar1376813211'));
    }

    public function show(TestCar1376813211 $testCar1376813211)
    {
        return view('admin.testcar1376813211.show', compact('testCar1376813211'));
    }
}
