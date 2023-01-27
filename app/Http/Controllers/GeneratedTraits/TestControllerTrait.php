<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar436456490;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar436456490.index');
    }

    public function create()
    {
        return view('admin.testcar436456490.create');
    }

    public function edit(TestCar436456490 $testCar436456490)
    {
        return view('admin.testcar436456490.edit', compact('testCar436456490'));
    }

    public function show(TestCar436456490 $testCar436456490)
    {
        return view('admin.testcar436456490.show', compact('testCar436456490'));
    }
}
