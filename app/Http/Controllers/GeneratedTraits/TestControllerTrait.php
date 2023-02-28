<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2120781035;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2120781035.index');
    }

    public function create()
    {
        return view('admin.testcar2120781035.create');
    }

    public function edit(TestCar2120781035 $testCar2120781035)
    {
        return view('admin.testcar2120781035.edit', compact('testCar2120781035'));
    }

    public function show(TestCar2120781035 $testCar2120781035)
    {
        return view('admin.testcar2120781035.show', compact('testCar2120781035'));
    }
}
