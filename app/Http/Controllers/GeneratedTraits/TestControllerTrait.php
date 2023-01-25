<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar102339461;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar102339461.index');
    }

    public function create()
    {
        return view('admin.testcar102339461.create');
    }

    public function edit(TestCar102339461 $testCar102339461)
    {
        return view('admin.testcar102339461.edit', compact('testCar102339461'));
    }

    public function show(TestCar102339461 $testCar102339461)
    {
        return view('admin.testcar102339461.show', compact('testCar102339461'));
    }
}
