<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2084720087;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2084720087.index');
    }

    public function create()
    {
        return view('admin.testcar2084720087.create');
    }

    public function edit(TestCar2084720087 $testCar2084720087)
    {
        return view('admin.testcar2084720087.edit', compact('testCar2084720087'));
    }

    public function show(TestCar2084720087 $testCar2084720087)
    {
        return view('admin.testcar2084720087.show', compact('testCar2084720087'));
    }
}
