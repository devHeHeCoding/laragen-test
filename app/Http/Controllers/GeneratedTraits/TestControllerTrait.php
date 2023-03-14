<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar876793704;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar876793704.index');
    }

    public function create()
    {
        return view('admin.testcar876793704.create');
    }

    public function edit(TestCar876793704 $testCar876793704)
    {
        return view('admin.testcar876793704.edit', compact('testCar876793704'));
    }

    public function show(TestCar876793704 $testCar876793704)
    {
        return view('admin.testcar876793704.show', compact('testCar876793704'));
    }
}
