<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1818946289;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1818946289.index');
    }

    public function create()
    {
        return view('admin.testcar1818946289.create');
    }

    public function edit(TestCar1818946289 $testCar1818946289)
    {
        return view('admin.testcar1818946289.edit', compact('testCar1818946289'));
    }

    public function show(TestCar1818946289 $testCar1818946289)
    {
        return view('admin.testcar1818946289.show', compact('testCar1818946289'));
    }
}
