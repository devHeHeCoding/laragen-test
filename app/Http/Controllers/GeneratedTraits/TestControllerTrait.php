<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar595373304;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar595373304.index');
    }

    public function create()
    {
        return view('admin.testcar595373304.create');
    }

    public function edit(TestCar595373304 $testCar595373304)
    {
        return view('admin.testcar595373304.edit', compact('testCar595373304'));
    }

    public function show(TestCar595373304 $testCar595373304)
    {
        return view('admin.testcar595373304.show', compact('testCar595373304'));
    }
}
