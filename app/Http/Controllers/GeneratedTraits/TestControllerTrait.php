<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar396889675;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar396889675.index');
    }

    public function create()
    {
        return view('admin.testcar396889675.create');
    }

    public function edit(TestCar396889675 $testCar396889675)
    {
        return view('admin.testcar396889675.edit', compact('testCar396889675'));
    }

    public function show(TestCar396889675 $testCar396889675)
    {
        return view('admin.testcar396889675.show', compact('testCar396889675'));
    }
}
