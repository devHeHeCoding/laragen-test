<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1269619307;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1269619307.index');
    }

    public function create()
    {
        return view('admin.testcar1269619307.create');
    }

    public function edit(TestCar1269619307 $testCar1269619307)
    {
        return view('admin.testcar1269619307.edit', compact('testCar1269619307'));
    }

    public function show(TestCar1269619307 $testCar1269619307)
    {
        return view('admin.testcar1269619307.show', compact('testCar1269619307'));
    }
}
