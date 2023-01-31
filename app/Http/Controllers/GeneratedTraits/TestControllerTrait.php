<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar120031985;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar120031985.index');
    }

    public function create()
    {
        return view('admin.testcar120031985.create');
    }

    public function edit(TestCar120031985 $testCar120031985)
    {
        return view('admin.testcar120031985.edit', compact('testCar120031985'));
    }

    public function show(TestCar120031985 $testCar120031985)
    {
        return view('admin.testcar120031985.show', compact('testCar120031985'));
    }
}
