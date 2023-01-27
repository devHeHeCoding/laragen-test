<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1618233239;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1618233239.index');
    }

    public function create()
    {
        return view('admin.testcar1618233239.create');
    }

    public function edit(TestCar1618233239 $testCar1618233239)
    {
        return view('admin.testcar1618233239.edit', compact('testCar1618233239'));
    }

    public function show(TestCar1618233239 $testCar1618233239)
    {
        return view('admin.testcar1618233239.show', compact('testCar1618233239'));
    }
}
