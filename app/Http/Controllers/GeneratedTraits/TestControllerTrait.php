<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1570150971;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1570150971.index');
    }

    public function create()
    {
        return view('admin.testcar1570150971.create');
    }

    public function edit(TestCar1570150971 $testCar1570150971)
    {
        return view('admin.testcar1570150971.edit', compact('testCar1570150971'));
    }

    public function show(TestCar1570150971 $testCar1570150971)
    {
        return view('admin.testcar1570150971.show', compact('testCar1570150971'));
    }
}
