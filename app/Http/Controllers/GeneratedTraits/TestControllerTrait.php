<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1009826546;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1009826546.index');
    }

    public function create()
    {
        return view('admin.testcar1009826546.create');
    }

    public function edit(TestCar1009826546 $testcar1009826546)
    {
        return view('admin.testcar1009826546.edit', compact('testcar1009826546'));
    }

    public function show(TestCar1009826546 $testcar1009826546)
    {
        return view('admin.testcar1009826546.show', compact('testcar1009826546'));
    }
}
