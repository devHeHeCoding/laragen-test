<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1778677751;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1778677751.index');
    }

    public function create()
    {
        return view('admin.testcar1778677751.create');
    }

    public function edit(TestCar1778677751 $testCar1778677751)
    {
        return view('admin.testcar1778677751.edit', compact('testCar1778677751'));
    }

    public function show(TestCar1778677751 $testCar1778677751)
    {
        return view('admin.testcar1778677751.show', compact('testCar1778677751'));
    }
}
