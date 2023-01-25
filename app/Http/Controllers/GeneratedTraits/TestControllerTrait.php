<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1868284024;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1868284024.index');
    }

    public function create()
    {
        return view('admin.testcar1868284024.create');
    }

    public function edit(TestCar1868284024 $testCar1868284024)
    {
        return view('admin.testcar1868284024.edit', compact('testCar1868284024'));
    }

    public function show(TestCar1868284024 $testCar1868284024)
    {
        return view('admin.testcar1868284024.show', compact('testCar1868284024'));
    }
}
