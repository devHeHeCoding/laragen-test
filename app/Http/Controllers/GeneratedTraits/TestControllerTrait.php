<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1523639821;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1523639821.index');
    }

    public function create()
    {
        return view('admin.testcar1523639821.create');
    }

    public function edit(TestCar1523639821 $testCar1523639821)
    {
        return view('admin.testcar1523639821.edit', compact('testCar1523639821'));
    }

    public function show(TestCar1523639821 $testCar1523639821)
    {
        return view('admin.testcar1523639821.show', compact('testCar1523639821'));
    }
}
