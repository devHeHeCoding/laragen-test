<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1388237257;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1388237257.index');
    }

    public function create()
    {
        return view('admin.testcar1388237257.create');
    }

    public function edit(TestCar1388237257 $testCar1388237257)
    {
        return view('admin.testcar1388237257.edit', compact('testCar1388237257'));
    }

    public function show(TestCar1388237257 $testCar1388237257)
    {
        return view('admin.testcar1388237257.show', compact('testCar1388237257'));
    }
}
