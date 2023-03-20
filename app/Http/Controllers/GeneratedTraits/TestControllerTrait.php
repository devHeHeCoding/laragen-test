<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar795180617;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar795180617.index');
    }

    public function create()
    {
        return view('admin.testcar795180617.create');
    }

    public function edit(TestCar795180617 $testCar795180617)
    {
        return view('admin.testcar795180617.edit', compact('testCar795180617'));
    }

    public function show(TestCar795180617 $testCar795180617)
    {
        return view('admin.testcar795180617.show', compact('testCar795180617'));
    }
}
