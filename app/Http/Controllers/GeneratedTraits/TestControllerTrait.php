<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1381045626;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1381045626.index');
    }

    public function create()
    {
        return view('admin.testcar1381045626.create');
    }

    public function edit(TestCar1381045626 $testCar1381045626)
    {
        return view('admin.testcar1381045626.edit', compact('testCar1381045626'));
    }

    public function show(TestCar1381045626 $testCar1381045626)
    {
        return view('admin.testcar1381045626.show', compact('testCar1381045626'));
    }
}
