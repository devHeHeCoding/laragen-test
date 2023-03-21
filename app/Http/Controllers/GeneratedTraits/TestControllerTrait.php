<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar338518119;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar338518119.index');
    }

    public function create()
    {
        return view('admin.testcar338518119.create');
    }

    public function edit(TestCar338518119 $testCar338518119)
    {
        return view('admin.testcar338518119.edit', compact('testCar338518119'));
    }

    public function show(TestCar338518119 $testCar338518119)
    {
        return view('admin.testcar338518119.show', compact('testCar338518119'));
    }
}
