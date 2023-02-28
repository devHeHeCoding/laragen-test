<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar907212109;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar907212109.index');
    }

    public function create()
    {
        return view('admin.testcar907212109.create');
    }

    public function edit(TestCar907212109 $testCar907212109)
    {
        return view('admin.testcar907212109.edit', compact('testCar907212109'));
    }

    public function show(TestCar907212109 $testCar907212109)
    {
        return view('admin.testcar907212109.show', compact('testCar907212109'));
    }
}
