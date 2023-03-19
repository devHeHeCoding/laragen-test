<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1975829433;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1975829433.index');
    }

    public function create()
    {
        return view('admin.testcar1975829433.create');
    }

    public function edit(TestCar1975829433 $testCar1975829433)
    {
        return view('admin.testcar1975829433.edit', compact('testCar1975829433'));
    }

    public function show(TestCar1975829433 $testCar1975829433)
    {
        return view('admin.testcar1975829433.show', compact('testCar1975829433'));
    }
}
