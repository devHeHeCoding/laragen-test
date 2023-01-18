<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1107132491;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1107132491.index');
    }

    public function create()
    {
        return view('admin.testcar1107132491.create');
    }

    public function edit(TestCar1107132491 $testcar1107132491)
    {
        return view('admin.testcar1107132491.edit', compact('testcar1107132491'));
    }

    public function show(TestCar1107132491 $testcar1107132491)
    {
        return view('admin.testcar1107132491.show', compact('testcar1107132491'));
    }
}
