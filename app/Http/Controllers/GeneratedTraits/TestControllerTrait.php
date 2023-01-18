<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1706888482;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1706888482.index');
    }

    public function create()
    {
        return view('admin.testcar1706888482.create');
    }

    public function edit(TestCar1706888482 $testcar1706888482)
    {
        return view('admin.testcar1706888482.edit', compact('testcar1706888482'));
    }

    public function show(TestCar1706888482 $testcar1706888482)
    {
        return view('admin.testcar1706888482.show', compact('testcar1706888482'));
    }
}
