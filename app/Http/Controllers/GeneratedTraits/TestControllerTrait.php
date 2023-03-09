<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1704459636;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1704459636.index');
    }

    public function create()
    {
        return view('admin.testcar1704459636.create');
    }

    public function edit(TestCar1704459636 $testCar1704459636)
    {
        return view('admin.testcar1704459636.edit', compact('testCar1704459636'));
    }

    public function show(TestCar1704459636 $testCar1704459636)
    {
        return view('admin.testcar1704459636.show', compact('testCar1704459636'));
    }
}
