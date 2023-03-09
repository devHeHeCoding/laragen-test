<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1400889639;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1400889639.index');
    }

    public function create()
    {
        return view('admin.testcar1400889639.create');
    }

    public function edit(TestCar1400889639 $testCar1400889639)
    {
        return view('admin.testcar1400889639.edit', compact('testCar1400889639'));
    }

    public function show(TestCar1400889639 $testCar1400889639)
    {
        return view('admin.testcar1400889639.show', compact('testCar1400889639'));
    }
}
