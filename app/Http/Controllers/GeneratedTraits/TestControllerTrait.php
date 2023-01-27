<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2113596585;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2113596585.index');
    }

    public function create()
    {
        return view('admin.testcar2113596585.create');
    }

    public function edit(TestCar2113596585 $testCar2113596585)
    {
        return view('admin.testcar2113596585.edit', compact('testCar2113596585'));
    }

    public function show(TestCar2113596585 $testCar2113596585)
    {
        return view('admin.testcar2113596585.show', compact('testCar2113596585'));
    }
}
