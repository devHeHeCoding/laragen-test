<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar923986688;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar923986688.index');
    }

    public function create()
    {
        return view('admin.testcar923986688.create');
    }

    public function edit(TestCar923986688 $testCar923986688)
    {
        return view('admin.testcar923986688.edit', compact('testCar923986688'));
    }

    public function show(TestCar923986688 $testCar923986688)
    {
        return view('admin.testcar923986688.show', compact('testCar923986688'));
    }
}
