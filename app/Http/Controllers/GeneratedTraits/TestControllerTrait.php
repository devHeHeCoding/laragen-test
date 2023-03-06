<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1044631486;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1044631486.index');
    }

    public function create()
    {
        return view('admin.testcar1044631486.create');
    }

    public function edit(TestCar1044631486 $testCar1044631486)
    {
        return view('admin.testcar1044631486.edit', compact('testCar1044631486'));
    }

    public function show(TestCar1044631486 $testCar1044631486)
    {
        return view('admin.testcar1044631486.show', compact('testCar1044631486'));
    }
}
