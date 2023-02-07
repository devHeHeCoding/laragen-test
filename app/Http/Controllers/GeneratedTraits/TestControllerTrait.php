<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1921867778;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1921867778.index');
    }

    public function create()
    {
        return view('admin.testcar1921867778.create');
    }

    public function edit(TestCar1921867778 $testCar1921867778)
    {
        return view('admin.testcar1921867778.edit', compact('testCar1921867778'));
    }

    public function show(TestCar1921867778 $testCar1921867778)
    {
        return view('admin.testcar1921867778.show', compact('testCar1921867778'));
    }
}
