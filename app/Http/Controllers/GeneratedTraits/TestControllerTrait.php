<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar935760899;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar935760899.index');
    }

    public function create()
    {
        return view('admin.testcar935760899.create');
    }

    public function edit(TestCar935760899 $testCar935760899)
    {
        return view('admin.testcar935760899.edit', compact('testCar935760899'));
    }

    public function show(TestCar935760899 $testCar935760899)
    {
        return view('admin.testcar935760899.show', compact('testCar935760899'));
    }
}
