<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar18586312;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar18586312.index');
    }

    public function create()
    {
        return view('admin.testcar18586312.create');
    }

    public function edit(TestCar18586312 $testCar18586312)
    {
        return view('admin.testcar18586312.edit', compact('testCar18586312'));
    }

    public function show(TestCar18586312 $testCar18586312)
    {
        return view('admin.testcar18586312.show', compact('testCar18586312'));
    }
}
