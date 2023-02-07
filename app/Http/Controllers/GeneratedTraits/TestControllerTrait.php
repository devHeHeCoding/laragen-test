<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar154622430;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar154622430.index');
    }

    public function create()
    {
        return view('admin.testcar154622430.create');
    }

    public function edit(TestCar154622430 $testCar154622430)
    {
        return view('admin.testcar154622430.edit', compact('testCar154622430'));
    }

    public function show(TestCar154622430 $testCar154622430)
    {
        return view('admin.testcar154622430.show', compact('testCar154622430'));
    }
}
