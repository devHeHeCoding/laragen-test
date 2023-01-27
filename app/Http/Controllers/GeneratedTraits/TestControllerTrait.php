<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2114012326;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2114012326.index');
    }

    public function create()
    {
        return view('admin.testcar2114012326.create');
    }

    public function edit(TestCar2114012326 $testCar2114012326)
    {
        return view('admin.testcar2114012326.edit', compact('testCar2114012326'));
    }

    public function show(TestCar2114012326 $testCar2114012326)
    {
        return view('admin.testcar2114012326.show', compact('testCar2114012326'));
    }
}
