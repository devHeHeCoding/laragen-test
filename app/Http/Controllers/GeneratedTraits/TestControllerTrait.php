<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar876424200;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar876424200.index');
    }

    public function create()
    {
        return view('admin.testcar876424200.create');
    }

    public function edit(TestCar876424200 $testCar876424200)
    {
        return view('admin.testcar876424200.edit', compact('testCar876424200'));
    }

    public function show(TestCar876424200 $testCar876424200)
    {
        return view('admin.testcar876424200.show', compact('testCar876424200'));
    }
}
