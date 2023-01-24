<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1448640523;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1448640523.index');
    }

    public function create()
    {
        return view('admin.testcar1448640523.create');
    }

    public function edit(TestCar1448640523 $testCar1448640523)
    {
        return view('admin.testcar1448640523.edit', compact('testCar1448640523'));
    }

    public function show(TestCar1448640523 $testCar1448640523)
    {
        return view('admin.testcar1448640523.show', compact('testCar1448640523'));
    }
}
