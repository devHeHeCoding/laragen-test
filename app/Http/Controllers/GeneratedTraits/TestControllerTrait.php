<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar898972813;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar898972813.index');
    }

    public function create()
    {
        return view('admin.testcar898972813.create');
    }

    public function edit(TestCar898972813 $testCar898972813)
    {
        return view('admin.testcar898972813.edit', compact('testCar898972813'));
    }

    public function show(TestCar898972813 $testCar898972813)
    {
        return view('admin.testcar898972813.show', compact('testCar898972813'));
    }
}
