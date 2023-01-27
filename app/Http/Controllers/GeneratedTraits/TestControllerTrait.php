<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1622906751;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1622906751.index');
    }

    public function create()
    {
        return view('admin.testcar1622906751.create');
    }

    public function edit(TestCar1622906751 $testCar1622906751)
    {
        return view('admin.testcar1622906751.edit', compact('testCar1622906751'));
    }

    public function show(TestCar1622906751 $testCar1622906751)
    {
        return view('admin.testcar1622906751.show', compact('testCar1622906751'));
    }
}
