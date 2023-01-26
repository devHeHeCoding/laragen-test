<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar844793946;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar844793946.index');
    }

    public function create()
    {
        return view('admin.testcar844793946.create');
    }

    public function edit(TestCar844793946 $testCar844793946)
    {
        return view('admin.testcar844793946.edit', compact('testCar844793946'));
    }

    public function show(TestCar844793946 $testCar844793946)
    {
        return view('admin.testcar844793946.show', compact('testCar844793946'));
    }
}
