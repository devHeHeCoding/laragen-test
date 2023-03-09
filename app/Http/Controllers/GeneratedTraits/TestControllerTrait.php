<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar309064133;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar309064133.index');
    }

    public function create()
    {
        return view('admin.testcar309064133.create');
    }

    public function edit(TestCar309064133 $testCar309064133)
    {
        return view('admin.testcar309064133.edit', compact('testCar309064133'));
    }

    public function show(TestCar309064133 $testCar309064133)
    {
        return view('admin.testcar309064133.show', compact('testCar309064133'));
    }
}
