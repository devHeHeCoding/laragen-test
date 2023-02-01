<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar453760717;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar453760717.index');
    }

    public function create()
    {
        return view('admin.testcar453760717.create');
    }

    public function edit(TestCar453760717 $testCar453760717)
    {
        return view('admin.testcar453760717.edit', compact('testCar453760717'));
    }

    public function show(TestCar453760717 $testCar453760717)
    {
        return view('admin.testcar453760717.show', compact('testCar453760717'));
    }
}
