<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1183076443;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1183076443.index');
    }

    public function create()
    {
        return view('admin.testcar1183076443.create');
    }

    public function edit(TestCar1183076443 $testCar1183076443)
    {
        return view('admin.testcar1183076443.edit', compact('testCar1183076443'));
    }

    public function show(TestCar1183076443 $testCar1183076443)
    {
        return view('admin.testcar1183076443.show', compact('testCar1183076443'));
    }
}
