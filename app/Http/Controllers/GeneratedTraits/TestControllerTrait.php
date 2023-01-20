<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1424180971;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1424180971.index');
    }

    public function create()
    {
        return view('admin.testcar1424180971.create');
    }

    public function edit(TestCar1424180971 $testCar1424180971)
    {
        return view('admin.testcar1424180971.edit', compact('testCar1424180971'));
    }

    public function show(TestCar1424180971 $testCar1424180971)
    {
        return view('admin.testcar1424180971.show', compact('testCar1424180971'));
    }
}
