<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar1172135082;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar1172135082.index');
    }

    public function create()
    {
        return view('admin.testcar1172135082.create');
    }

    public function edit(TestCar1172135082 $testCar1172135082)
    {
        return view('admin.testcar1172135082.edit', compact('testCar1172135082'));
    }

    public function show(TestCar1172135082 $testCar1172135082)
    {
        return view('admin.testcar1172135082.show', compact('testCar1172135082'));
    }
}
