<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1460715364;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1460715364.index');
    }

    public function create()
    {
        return view('admin.testcar1460715364.create');
    }

    public function edit(TestCar1460715364 $testCar1460715364)
    {
        return view('admin.testcar1460715364.edit', compact('testCar1460715364'));
    }

    public function show(TestCar1460715364 $testCar1460715364)
    {
        return view('admin.testcar1460715364.show', compact('testCar1460715364'));
    }
}
