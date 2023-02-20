<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1425819819;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1425819819.index');
    }

    public function create()
    {
        return view('admin.testcar1425819819.create');
    }

    public function edit(TestCar1425819819 $testCar1425819819)
    {
        return view('admin.testcar1425819819.edit', compact('testCar1425819819'));
    }

    public function show(TestCar1425819819 $testCar1425819819)
    {
        return view('admin.testcar1425819819.show', compact('testCar1425819819'));
    }
}
