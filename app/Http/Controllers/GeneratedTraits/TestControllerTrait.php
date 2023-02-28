<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1070024050;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1070024050.index');
    }

    public function create()
    {
        return view('admin.testcar1070024050.create');
    }

    public function edit(TestCar1070024050 $testCar1070024050)
    {
        return view('admin.testcar1070024050.edit', compact('testCar1070024050'));
    }

    public function show(TestCar1070024050 $testCar1070024050)
    {
        return view('admin.testcar1070024050.show', compact('testCar1070024050'));
    }
}
