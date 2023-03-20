<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1382396428;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1382396428.index');
    }

    public function create()
    {
        return view('admin.testcar1382396428.create');
    }

    public function edit(TestCar1382396428 $testCar1382396428)
    {
        return view('admin.testcar1382396428.edit', compact('testCar1382396428'));
    }

    public function show(TestCar1382396428 $testCar1382396428)
    {
        return view('admin.testcar1382396428.show', compact('testCar1382396428'));
    }
}
