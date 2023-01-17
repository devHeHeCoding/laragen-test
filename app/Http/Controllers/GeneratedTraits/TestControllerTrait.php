<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1685974392;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1685974392.index');
    }

    public function create()
    {
        return view('admin.testcar1685974392.create');
    }

    public function edit(TestCar1685974392 $testcar1685974392)
    {
        return view('admin.testcar1685974392.edit', compact('testcar1685974392'));
    }

    public function show(TestCar1685974392 $testcar1685974392)
    {
        return view('admin.testcar1685974392.show', compact('testcar1685974392'));
    }
}
