<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar116809704;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar116809704.index');
    }

    public function create()
    {
        return view('admin.testcar116809704.create');
    }

    public function edit(TestCar116809704 $testcar116809704)
    {
        return view('admin.testcar116809704.edit', compact('testcar116809704'));
    }

    public function show(TestCar116809704 $testcar116809704)
    {
        return view('admin.testcar116809704.show', compact('testcar116809704'));
    }
}
