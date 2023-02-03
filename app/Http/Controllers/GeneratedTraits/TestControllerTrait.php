<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar340427550;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar340427550.index');
    }

    public function create()
    {
        return view('admin.testcar340427550.create');
    }

    public function edit(TestCar340427550 $testCar340427550)
    {
        return view('admin.testcar340427550.edit', compact('testCar340427550'));
    }

    public function show(TestCar340427550 $testCar340427550)
    {
        return view('admin.testcar340427550.show', compact('testCar340427550'));
    }
}
