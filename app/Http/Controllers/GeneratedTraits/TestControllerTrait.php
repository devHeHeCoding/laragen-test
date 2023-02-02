<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar867844321;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar867844321.index');
    }

    public function create()
    {
        return view('admin.testcar867844321.create');
    }

    public function edit(TestCar867844321 $testCar867844321)
    {
        return view('admin.testcar867844321.edit', compact('testCar867844321'));
    }

    public function show(TestCar867844321 $testCar867844321)
    {
        return view('admin.testcar867844321.show', compact('testCar867844321'));
    }
}
