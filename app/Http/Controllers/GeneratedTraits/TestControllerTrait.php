<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1346775555;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1346775555.index');
    }

    public function create()
    {
        return view('admin.testcar1346775555.create');
    }

    public function edit(TestCar1346775555 $testCar1346775555)
    {
        return view('admin.testcar1346775555.edit', compact('testCar1346775555'));
    }

    public function show(TestCar1346775555 $testCar1346775555)
    {
        return view('admin.testcar1346775555.show', compact('testCar1346775555'));
    }
}
