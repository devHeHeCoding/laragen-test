<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar465974586;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar465974586.index');
    }

    public function create()
    {
        return view('admin.testcar465974586.create');
    }

    public function edit(TestCar465974586 $testCar465974586)
    {
        return view('admin.testcar465974586.edit', compact('testCar465974586'));
    }

    public function show(TestCar465974586 $testCar465974586)
    {
        return view('admin.testcar465974586.show', compact('testCar465974586'));
    }
}
