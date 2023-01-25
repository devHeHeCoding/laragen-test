<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1043931796;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1043931796.index');
    }

    public function create()
    {
        return view('admin.testcar1043931796.create');
    }

    public function edit(TestCar1043931796 $testCar1043931796)
    {
        return view('admin.testcar1043931796.edit', compact('testCar1043931796'));
    }

    public function show(TestCar1043931796 $testCar1043931796)
    {
        return view('admin.testcar1043931796.show', compact('testCar1043931796'));
    }
}
