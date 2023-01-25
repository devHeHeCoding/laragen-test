<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1777235595;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1777235595.index');
    }

    public function create()
    {
        return view('admin.testcar1777235595.create');
    }

    public function edit(TestCar1777235595 $testCar1777235595)
    {
        return view('admin.testcar1777235595.edit', compact('testCar1777235595'));
    }

    public function show(TestCar1777235595 $testCar1777235595)
    {
        return view('admin.testcar1777235595.show', compact('testCar1777235595'));
    }
}
