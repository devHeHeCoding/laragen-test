<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar242859405;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar242859405.index');
    }

    public function create()
    {
        return view('admin.testcar242859405.create');
    }

    public function edit(TestCar242859405 $testCar242859405)
    {
        return view('admin.testcar242859405.edit', compact('testCar242859405'));
    }

    public function show(TestCar242859405 $testCar242859405)
    {
        return view('admin.testcar242859405.show', compact('testCar242859405'));
    }
}
