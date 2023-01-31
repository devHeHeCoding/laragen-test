<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar487718396;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar487718396.index');
    }

    public function create()
    {
        return view('admin.testcar487718396.create');
    }

    public function edit(TestCar487718396 $testCar487718396)
    {
        return view('admin.testcar487718396.edit', compact('testCar487718396'));
    }

    public function show(TestCar487718396 $testCar487718396)
    {
        return view('admin.testcar487718396.show', compact('testCar487718396'));
    }
}
