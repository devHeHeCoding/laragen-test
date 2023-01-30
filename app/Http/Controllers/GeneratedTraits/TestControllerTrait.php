<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2125066814;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2125066814.index');
    }

    public function create()
    {
        return view('admin.testcar2125066814.create');
    }

    public function edit(TestCar2125066814 $testCar2125066814)
    {
        return view('admin.testcar2125066814.edit', compact('testCar2125066814'));
    }

    public function show(TestCar2125066814 $testCar2125066814)
    {
        return view('admin.testcar2125066814.show', compact('testCar2125066814'));
    }
}
