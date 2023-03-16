<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar250640198;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar250640198.index');
    }

    public function create()
    {
        return view('admin.testcar250640198.create');
    }

    public function edit(TestCar250640198 $testCar250640198)
    {
        return view('admin.testcar250640198.edit', compact('testCar250640198'));
    }

    public function show(TestCar250640198 $testCar250640198)
    {
        return view('admin.testcar250640198.show', compact('testCar250640198'));
    }
}
