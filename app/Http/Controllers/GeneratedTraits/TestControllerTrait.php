<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1966287723;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1966287723.index');
    }

    public function create()
    {
        return view('admin.testcar1966287723.create');
    }

    public function edit(TestCar1966287723 $testCar1966287723)
    {
        return view('admin.testcar1966287723.edit', compact('testCar1966287723'));
    }

    public function show(TestCar1966287723 $testCar1966287723)
    {
        return view('admin.testcar1966287723.show', compact('testCar1966287723'));
    }
}
