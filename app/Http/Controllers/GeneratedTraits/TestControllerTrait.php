<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1449230220;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1449230220.index');
    }

    public function create()
    {
        return view('admin.testcar1449230220.create');
    }

    public function edit(TestCar1449230220 $testCar1449230220)
    {
        return view('admin.testcar1449230220.edit', compact('testCar1449230220'));
    }

    public function show(TestCar1449230220 $testCar1449230220)
    {
        return view('admin.testcar1449230220.show', compact('testCar1449230220'));
    }
}
