<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar646393988;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar646393988.index');
    }

    public function create()
    {
        return view('admin.testcar646393988.create');
    }

    public function edit(TestCar646393988 $testCar646393988)
    {
        return view('admin.testcar646393988.edit', compact('testCar646393988'));
    }

    public function show(TestCar646393988 $testCar646393988)
    {
        return view('admin.testcar646393988.show', compact('testCar646393988'));
    }
}
