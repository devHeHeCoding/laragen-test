<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1097791186;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1097791186.index');
    }

    public function create()
    {
        return view('admin.testcar1097791186.create');
    }

    public function edit(TestCar1097791186 $testCar1097791186)
    {
        return view('admin.testcar1097791186.edit', compact('testCar1097791186'));
    }

    public function show(TestCar1097791186 $testCar1097791186)
    {
        return view('admin.testcar1097791186.show', compact('testCar1097791186'));
    }
}
