<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1159620795;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1159620795.index');
    }

    public function create()
    {
        return view('admin.testcar1159620795.create');
    }

    public function edit(TestCar1159620795 $testCar1159620795)
    {
        return view('admin.testcar1159620795.edit', compact('testCar1159620795'));
    }

    public function show(TestCar1159620795 $testCar1159620795)
    {
        return view('admin.testcar1159620795.show', compact('testCar1159620795'));
    }
}
