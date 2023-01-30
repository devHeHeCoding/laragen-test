<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1877131006;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1877131006.index');
    }

    public function create()
    {
        return view('admin.testcar1877131006.create');
    }

    public function edit(TestCar1877131006 $testCar1877131006)
    {
        return view('admin.testcar1877131006.edit', compact('testCar1877131006'));
    }

    public function show(TestCar1877131006 $testCar1877131006)
    {
        return view('admin.testcar1877131006.show', compact('testCar1877131006'));
    }
}
