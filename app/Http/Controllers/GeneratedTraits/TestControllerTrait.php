<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1956169116;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1956169116.index');
    }

    public function create()
    {
        return view('admin.testcar1956169116.create');
    }

    public function edit(TestCar1956169116 $testCar1956169116)
    {
        return view('admin.testcar1956169116.edit', compact('testCar1956169116'));
    }

    public function show(TestCar1956169116 $testCar1956169116)
    {
        return view('admin.testcar1956169116.show', compact('testCar1956169116'));
    }
}
