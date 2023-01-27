<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2126254712;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2126254712.index');
    }

    public function create()
    {
        return view('admin.testcar2126254712.create');
    }

    public function edit(TestCar2126254712 $testCar2126254712)
    {
        return view('admin.testcar2126254712.edit', compact('testCar2126254712'));
    }

    public function show(TestCar2126254712 $testCar2126254712)
    {
        return view('admin.testcar2126254712.show', compact('testCar2126254712'));
    }
}
