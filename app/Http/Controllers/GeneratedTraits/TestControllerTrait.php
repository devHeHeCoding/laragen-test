<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1111311608;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1111311608.index');
    }

    public function create()
    {
        return view('admin.testcar1111311608.create');
    }

    public function edit(TestCar1111311608 $testcar1111311608)
    {
        return view('admin.testcar1111311608.edit', compact('testcar1111311608'));
    }

    public function show(TestCar1111311608 $testcar1111311608)
    {
        return view('admin.testcar1111311608.show', compact('testcar1111311608'));
    }
}
