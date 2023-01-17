<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar2057351889;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar2057351889.index');
    }

    public function create()
    {
        return view('admin.testcar2057351889.create');
    }

    public function edit(TestCar2057351889 $testcar2057351889)
    {
        return view('admin.testcar2057351889.edit', compact('testcar2057351889'));
    }

    public function show(TestCar2057351889 $testcar2057351889)
    {
        return view('admin.testcar2057351889.show', compact('testcar2057351889'));
    }
}
