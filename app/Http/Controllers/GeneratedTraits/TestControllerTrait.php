<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1110355267;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1110355267.index');
    }

    public function create()
    {
        return view('admin.testcar1110355267.create');
    }

    public function edit(TestCar1110355267 $testCar1110355267)
    {
        return view('admin.testcar1110355267.edit', compact('testCar1110355267'));
    }

    public function show(TestCar1110355267 $testCar1110355267)
    {
        return view('admin.testcar1110355267.show', compact('testCar1110355267'));
    }
}
