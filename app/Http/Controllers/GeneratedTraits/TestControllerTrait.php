<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar163136273;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar163136273.index');
    }

    public function create()
    {
        return view('admin.testcar163136273.create');
    }

    public function edit(TestCar163136273 $testCar163136273)
    {
        return view('admin.testcar163136273.edit', compact('testCar163136273'));
    }

    public function show(TestCar163136273 $testCar163136273)
    {
        return view('admin.testcar163136273.show', compact('testCar163136273'));
    }
}
