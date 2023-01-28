<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1714286670;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1714286670.index');
    }

    public function create()
    {
        return view('admin.testcar1714286670.create');
    }

    public function edit(TestCar1714286670 $testCar1714286670)
    {
        return view('admin.testcar1714286670.edit', compact('testCar1714286670'));
    }

    public function show(TestCar1714286670 $testCar1714286670)
    {
        return view('admin.testcar1714286670.show', compact('testCar1714286670'));
    }
}
