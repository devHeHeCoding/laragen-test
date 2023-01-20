<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar133474189;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar133474189.index');
    }

    public function create()
    {
        return view('admin.testcar133474189.create');
    }

    public function edit(TestCar133474189 $testCar133474189)
    {
        return view('admin.testcar133474189.edit', compact('testCar133474189'));
    }

    public function show(TestCar133474189 $testCar133474189)
    {
        return view('admin.testcar133474189.show', compact('testCar133474189'));
    }
}
