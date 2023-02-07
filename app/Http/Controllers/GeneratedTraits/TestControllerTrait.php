<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1741852970;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1741852970.index');
    }

    public function create()
    {
        return view('admin.testcar1741852970.create');
    }

    public function edit(TestCar1741852970 $testCar1741852970)
    {
        return view('admin.testcar1741852970.edit', compact('testCar1741852970'));
    }

    public function show(TestCar1741852970 $testCar1741852970)
    {
        return view('admin.testcar1741852970.show', compact('testCar1741852970'));
    }
}
