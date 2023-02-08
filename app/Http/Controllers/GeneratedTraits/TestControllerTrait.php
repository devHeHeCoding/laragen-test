<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1750227684;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1750227684.index');
    }

    public function create()
    {
        return view('admin.testcar1750227684.create');
    }

    public function edit(TestCar1750227684 $testCar1750227684)
    {
        return view('admin.testcar1750227684.edit', compact('testCar1750227684'));
    }

    public function show(TestCar1750227684 $testCar1750227684)
    {
        return view('admin.testcar1750227684.show', compact('testCar1750227684'));
    }
}
