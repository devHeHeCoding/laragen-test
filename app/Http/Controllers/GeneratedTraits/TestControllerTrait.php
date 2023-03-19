<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1331040511;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1331040511.index');
    }

    public function create()
    {
        return view('admin.testcar1331040511.create');
    }

    public function edit(TestCar1331040511 $testCar1331040511)
    {
        return view('admin.testcar1331040511.edit', compact('testCar1331040511'));
    }

    public function show(TestCar1331040511 $testCar1331040511)
    {
        return view('admin.testcar1331040511.show', compact('testCar1331040511'));
    }
}
