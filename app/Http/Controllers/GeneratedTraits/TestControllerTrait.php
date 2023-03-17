<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2110186441;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2110186441.index');
    }

    public function create()
    {
        return view('admin.testcar2110186441.create');
    }

    public function edit(TestCar2110186441 $testCar2110186441)
    {
        return view('admin.testcar2110186441.edit', compact('testCar2110186441'));
    }

    public function show(TestCar2110186441 $testCar2110186441)
    {
        return view('admin.testcar2110186441.show', compact('testCar2110186441'));
    }
}
