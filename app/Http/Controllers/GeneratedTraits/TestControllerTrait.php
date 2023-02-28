<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar357195745;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar357195745.index');
    }

    public function create()
    {
        return view('admin.testcar357195745.create');
    }

    public function edit(TestCar357195745 $testCar357195745)
    {
        return view('admin.testcar357195745.edit', compact('testCar357195745'));
    }

    public function show(TestCar357195745 $testCar357195745)
    {
        return view('admin.testcar357195745.show', compact('testCar357195745'));
    }
}
