<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1819308966;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1819308966.index');
    }

    public function create()
    {
        return view('admin.testcar1819308966.create');
    }

    public function edit(TestCar1819308966 $testCar1819308966)
    {
        return view('admin.testcar1819308966.edit', compact('testCar1819308966'));
    }

    public function show(TestCar1819308966 $testCar1819308966)
    {
        return view('admin.testcar1819308966.show', compact('testCar1819308966'));
    }
}
