<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar762609144;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar762609144.index');
    }

    public function create()
    {
        return view('admin.testcar762609144.create');
    }

    public function edit(TestCar762609144 $testcar762609144)
    {
        return view('admin.testcar762609144.edit', compact('testcar762609144'));
    }

    public function show(TestCar762609144 $testcar762609144)
    {
        return view('admin.testcar762609144.show', compact('testcar762609144'));
    }
}
