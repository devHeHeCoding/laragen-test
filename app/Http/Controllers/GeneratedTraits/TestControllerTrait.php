<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar18914160;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar18914160.index');
    }

    public function create()
    {
        return view('admin.testcar18914160.create');
    }

    public function edit(TestCar18914160 $testCar18914160)
    {
        return view('admin.testcar18914160.edit', compact('testCar18914160'));
    }

    public function show(TestCar18914160 $testCar18914160)
    {
        return view('admin.testcar18914160.show', compact('testCar18914160'));
    }
}
