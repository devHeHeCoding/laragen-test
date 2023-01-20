<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1957482001;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1957482001.index');
    }

    public function create()
    {
        return view('admin.testcar1957482001.create');
    }

    public function edit(TestCar1957482001 $testCar1957482001)
    {
        return view('admin.testcar1957482001.edit', compact('testCar1957482001'));
    }

    public function show(TestCar1957482001 $testCar1957482001)
    {
        return view('admin.testcar1957482001.show', compact('testCar1957482001'));
    }
}
