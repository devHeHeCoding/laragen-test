<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar762059127;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar762059127.index');
    }

    public function create()
    {
        return view('admin.testcar762059127.create');
    }

    public function edit(TestCar762059127 $testcar762059127)
    {
        return view('admin.testcar762059127.edit', compact('testcar762059127'));
    }

    public function show(TestCar762059127 $testcar762059127)
    {
        return view('admin.testcar762059127.show', compact('testcar762059127'));
    }
}
