<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1634922198;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1634922198.index');
    }

    public function create()
    {
        return view('admin.testcar1634922198.create');
    }

    public function edit(TestCar1634922198 $testcar1634922198)
    {
        return view('admin.testcar1634922198.edit', compact('testcar1634922198'));
    }

    public function show(TestCar1634922198 $testcar1634922198)
    {
        return view('admin.testcar1634922198.show', compact('testcar1634922198'));
    }
}
