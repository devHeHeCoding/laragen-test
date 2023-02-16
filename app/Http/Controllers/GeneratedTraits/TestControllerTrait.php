<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1331586653;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1331586653.index');
    }

    public function create()
    {
        return view('admin.testcar1331586653.create');
    }

    public function edit(TestCar1331586653 $testCar1331586653)
    {
        return view('admin.testcar1331586653.edit', compact('testCar1331586653'));
    }

    public function show(TestCar1331586653 $testCar1331586653)
    {
        return view('admin.testcar1331586653.show', compact('testCar1331586653'));
    }
}
