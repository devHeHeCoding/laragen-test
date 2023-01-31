<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2012776875;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2012776875.index');
    }

    public function create()
    {
        return view('admin.testcar2012776875.create');
    }

    public function edit(TestCar2012776875 $testCar2012776875)
    {
        return view('admin.testcar2012776875.edit', compact('testCar2012776875'));
    }

    public function show(TestCar2012776875 $testCar2012776875)
    {
        return view('admin.testcar2012776875.show', compact('testCar2012776875'));
    }
}
