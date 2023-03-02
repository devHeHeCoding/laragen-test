<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2074418549;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2074418549.index');
    }

    public function create()
    {
        return view('admin.testcar2074418549.create');
    }

    public function edit(TestCar2074418549 $testCar2074418549)
    {
        return view('admin.testcar2074418549.edit', compact('testCar2074418549'));
    }

    public function show(TestCar2074418549 $testCar2074418549)
    {
        return view('admin.testcar2074418549.show', compact('testCar2074418549'));
    }
}
