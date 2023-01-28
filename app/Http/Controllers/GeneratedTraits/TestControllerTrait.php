<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1277672587;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1277672587.index');
    }

    public function create()
    {
        return view('admin.testcar1277672587.create');
    }

    public function edit(TestCar1277672587 $testCar1277672587)
    {
        return view('admin.testcar1277672587.edit', compact('testCar1277672587'));
    }

    public function show(TestCar1277672587 $testCar1277672587)
    {
        return view('admin.testcar1277672587.show', compact('testCar1277672587'));
    }
}
