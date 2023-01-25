<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1727222775;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1727222775.index');
    }

    public function create()
    {
        return view('admin.testcar1727222775.create');
    }

    public function edit(TestCar1727222775 $testCar1727222775)
    {
        return view('admin.testcar1727222775.edit', compact('testCar1727222775'));
    }

    public function show(TestCar1727222775 $testCar1727222775)
    {
        return view('admin.testcar1727222775.show', compact('testCar1727222775'));
    }
}
