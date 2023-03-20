<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1186187951;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1186187951.index');
    }

    public function create()
    {
        return view('admin.testcar1186187951.create');
    }

    public function edit(TestCar1186187951 $testCar1186187951)
    {
        return view('admin.testcar1186187951.edit', compact('testCar1186187951'));
    }

    public function show(TestCar1186187951 $testCar1186187951)
    {
        return view('admin.testcar1186187951.show', compact('testCar1186187951'));
    }
}
