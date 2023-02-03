<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1965271382;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1965271382.index');
    }

    public function create()
    {
        return view('admin.testcar1965271382.create');
    }

    public function edit(TestCar1965271382 $testCar1965271382)
    {
        return view('admin.testcar1965271382.edit', compact('testCar1965271382'));
    }

    public function show(TestCar1965271382 $testCar1965271382)
    {
        return view('admin.testcar1965271382.show', compact('testCar1965271382'));
    }
}
