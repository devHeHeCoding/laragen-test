<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar281965965;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar281965965.index');
    }

    public function create()
    {
        return view('admin.testcar281965965.create');
    }

    public function edit(TestCar281965965 $testCar281965965)
    {
        return view('admin.testcar281965965.edit', compact('testCar281965965'));
    }

    public function show(TestCar281965965 $testCar281965965)
    {
        return view('admin.testcar281965965.show', compact('testCar281965965'));
    }
}
