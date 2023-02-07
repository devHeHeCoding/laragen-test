<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1031991510;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1031991510.index');
    }

    public function create()
    {
        return view('admin.testcar1031991510.create');
    }

    public function edit(TestCar1031991510 $testCar1031991510)
    {
        return view('admin.testcar1031991510.edit', compact('testCar1031991510'));
    }

    public function show(TestCar1031991510 $testCar1031991510)
    {
        return view('admin.testcar1031991510.show', compact('testCar1031991510'));
    }
}
