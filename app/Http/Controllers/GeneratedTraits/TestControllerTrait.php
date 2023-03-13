<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1916189146;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1916189146.index');
    }

    public function create()
    {
        return view('admin.testcar1916189146.create');
    }

    public function edit(TestCar1916189146 $testCar1916189146)
    {
        return view('admin.testcar1916189146.edit', compact('testCar1916189146'));
    }

    public function show(TestCar1916189146 $testCar1916189146)
    {
        return view('admin.testcar1916189146.show', compact('testCar1916189146'));
    }
}
