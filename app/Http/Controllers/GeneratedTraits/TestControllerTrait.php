<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar153111807;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar153111807.index');
    }

    public function create()
    {
        return view('admin.testcar153111807.create');
    }

    public function edit(TestCar153111807 $testCar153111807)
    {
        return view('admin.testcar153111807.edit', compact('testCar153111807'));
    }

    public function show(TestCar153111807 $testCar153111807)
    {
        return view('admin.testcar153111807.show', compact('testCar153111807'));
    }
}
