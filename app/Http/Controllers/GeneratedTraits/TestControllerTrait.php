<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1028612941;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1028612941.index');
    }

    public function create()
    {
        return view('admin.testcar1028612941.create');
    }

    public function edit(TestCar1028612941 $testCar1028612941)
    {
        return view('admin.testcar1028612941.edit', compact('testCar1028612941'));
    }

    public function show(TestCar1028612941 $testCar1028612941)
    {
        return view('admin.testcar1028612941.show', compact('testCar1028612941'));
    }
}
