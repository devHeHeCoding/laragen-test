<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar475663033;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar475663033.index');
    }

    public function create()
    {
        return view('admin.testcar475663033.create');
    }

    public function edit(TestCar475663033 $testCar475663033)
    {
        return view('admin.testcar475663033.edit', compact('testCar475663033'));
    }

    public function show(TestCar475663033 $testCar475663033)
    {
        return view('admin.testcar475663033.show', compact('testCar475663033'));
    }
}
