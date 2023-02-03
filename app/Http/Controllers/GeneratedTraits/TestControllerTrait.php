<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1490996067;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1490996067.index');
    }

    public function create()
    {
        return view('admin.testcar1490996067.create');
    }

    public function edit(TestCar1490996067 $testCar1490996067)
    {
        return view('admin.testcar1490996067.edit', compact('testCar1490996067'));
    }

    public function show(TestCar1490996067 $testCar1490996067)
    {
        return view('admin.testcar1490996067.show', compact('testCar1490996067'));
    }
}
