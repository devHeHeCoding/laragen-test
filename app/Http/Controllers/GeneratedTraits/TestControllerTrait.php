<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar764087460;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar764087460.index');
    }

    public function create()
    {
        return view('admin.testcar764087460.create');
    }

    public function edit(TestCar764087460 $testcar764087460)
    {
        return view('admin.testcar764087460.edit', compact('testcar764087460'));
    }

    public function show(TestCar764087460 $testcar764087460)
    {
        return view('admin.testcar764087460.show', compact('testcar764087460'));
    }
}
