<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1426086887;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1426086887.index');
    }

    public function create()
    {
        return view('admin.testcar1426086887.create');
    }

    public function edit(TestCar1426086887 $testCar1426086887)
    {
        return view('admin.testcar1426086887.edit', compact('testCar1426086887'));
    }

    public function show(TestCar1426086887 $testCar1426086887)
    {
        return view('admin.testcar1426086887.show', compact('testCar1426086887'));
    }
}
