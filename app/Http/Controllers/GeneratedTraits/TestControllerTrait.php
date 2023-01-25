<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar659232380;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar659232380.index');
    }

    public function create()
    {
        return view('admin.testcar659232380.create');
    }

    public function edit(TestCar659232380 $testCar659232380)
    {
        return view('admin.testcar659232380.edit', compact('testCar659232380'));
    }

    public function show(TestCar659232380 $testCar659232380)
    {
        return view('admin.testcar659232380.show', compact('testCar659232380'));
    }
}
