<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1703159673;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1703159673.index');
    }

    public function create()
    {
        return view('admin.testcar1703159673.create');
    }

    public function edit(TestCar1703159673 $testCar1703159673)
    {
        return view('admin.testcar1703159673.edit', compact('testCar1703159673'));
    }

    public function show(TestCar1703159673 $testCar1703159673)
    {
        return view('admin.testcar1703159673.show', compact('testCar1703159673'));
    }
}
