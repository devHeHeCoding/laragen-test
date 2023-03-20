<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1122180325;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1122180325.index');
    }

    public function create()
    {
        return view('admin.testcar1122180325.create');
    }

    public function edit(TestCar1122180325 $testCar1122180325)
    {
        return view('admin.testcar1122180325.edit', compact('testCar1122180325'));
    }

    public function show(TestCar1122180325 $testCar1122180325)
    {
        return view('admin.testcar1122180325.show', compact('testCar1122180325'));
    }
}
