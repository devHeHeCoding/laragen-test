<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1387258835;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1387258835.index');
    }

    public function create()
    {
        return view('admin.testcar1387258835.create');
    }

    public function edit(TestCar1387258835 $testCar1387258835)
    {
        return view('admin.testcar1387258835.edit', compact('testCar1387258835'));
    }

    public function show(TestCar1387258835 $testCar1387258835)
    {
        return view('admin.testcar1387258835.show', compact('testCar1387258835'));
    }
}
