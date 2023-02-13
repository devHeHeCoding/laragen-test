<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1457791476;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1457791476.index');
    }

    public function create()
    {
        return view('admin.testcar1457791476.create');
    }

    public function edit(TestCar1457791476 $testCar1457791476)
    {
        return view('admin.testcar1457791476.edit', compact('testCar1457791476'));
    }

    public function show(TestCar1457791476 $testCar1457791476)
    {
        return view('admin.testcar1457791476.show', compact('testCar1457791476'));
    }
}
