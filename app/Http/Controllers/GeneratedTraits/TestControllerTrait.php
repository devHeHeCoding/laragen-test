<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar457912317;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar457912317.index');
    }

    public function create()
    {
        return view('admin.testcar457912317.create');
    }

    public function edit(TestCar457912317 $testCar457912317)
    {
        return view('admin.testcar457912317.edit', compact('testCar457912317'));
    }

    public function show(TestCar457912317 $testCar457912317)
    {
        return view('admin.testcar457912317.show', compact('testCar457912317'));
    }
}
