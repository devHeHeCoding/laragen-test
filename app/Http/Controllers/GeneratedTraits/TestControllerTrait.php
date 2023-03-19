<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar533183347;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar533183347.index');
    }

    public function create()
    {
        return view('admin.testcar533183347.create');
    }

    public function edit(TestCar533183347 $testCar533183347)
    {
        return view('admin.testcar533183347.edit', compact('testCar533183347'));
    }

    public function show(TestCar533183347 $testCar533183347)
    {
        return view('admin.testcar533183347.show', compact('testCar533183347'));
    }
}
