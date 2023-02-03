<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1651712778;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1651712778.index');
    }

    public function create()
    {
        return view('admin.testcar1651712778.create');
    }

    public function edit(TestCar1651712778 $testCar1651712778)
    {
        return view('admin.testcar1651712778.edit', compact('testCar1651712778'));
    }

    public function show(TestCar1651712778 $testCar1651712778)
    {
        return view('admin.testcar1651712778.show', compact('testCar1651712778'));
    }
}
