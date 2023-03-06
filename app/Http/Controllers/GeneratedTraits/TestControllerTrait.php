<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1841028066;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1841028066.index');
    }

    public function create()
    {
        return view('admin.testcar1841028066.create');
    }

    public function edit(TestCar1841028066 $testCar1841028066)
    {
        return view('admin.testcar1841028066.edit', compact('testCar1841028066'));
    }

    public function show(TestCar1841028066 $testCar1841028066)
    {
        return view('admin.testcar1841028066.show', compact('testCar1841028066'));
    }
}
