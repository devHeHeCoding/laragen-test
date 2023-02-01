<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1572913987;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1572913987.index');
    }

    public function create()
    {
        return view('admin.testcar1572913987.create');
    }

    public function edit(TestCar1572913987 $testCar1572913987)
    {
        return view('admin.testcar1572913987.edit', compact('testCar1572913987'));
    }

    public function show(TestCar1572913987 $testCar1572913987)
    {
        return view('admin.testcar1572913987.show', compact('testCar1572913987'));
    }
}
