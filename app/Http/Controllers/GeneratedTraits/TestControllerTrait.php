<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1217718184;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1217718184.index');
    }

    public function create()
    {
        return view('admin.testcar1217718184.create');
    }

    public function edit(TestCar1217718184 $testcar1217718184)
    {
        return view('admin.testcar1217718184.edit', compact('testcar1217718184'));
    }

    public function show(TestCar1217718184 $testcar1217718184)
    {
        return view('admin.testcar1217718184.show', compact('testcar1217718184'));
    }
}
