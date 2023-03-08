<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1584959880;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1584959880.index');
    }

    public function create()
    {
        return view('admin.testcar1584959880.create');
    }

    public function edit(TestCar1584959880 $testCar1584959880)
    {
        return view('admin.testcar1584959880.edit', compact('testCar1584959880'));
    }

    public function show(TestCar1584959880 $testCar1584959880)
    {
        return view('admin.testcar1584959880.show', compact('testCar1584959880'));
    }
}
