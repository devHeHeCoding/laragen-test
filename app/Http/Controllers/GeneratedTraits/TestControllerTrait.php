<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2114917132;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2114917132.index');
    }

    public function create()
    {
        return view('admin.testcar2114917132.create');
    }

    public function edit(TestCar2114917132 $testCar2114917132)
    {
        return view('admin.testcar2114917132.edit', compact('testCar2114917132'));
    }

    public function show(TestCar2114917132 $testCar2114917132)
    {
        return view('admin.testcar2114917132.show', compact('testCar2114917132'));
    }
}
