<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar811601916;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar811601916.index');
    }

    public function create()
    {
        return view('admin.testcar811601916.create');
    }

    public function edit(TestCar811601916 $testCar811601916)
    {
        return view('admin.testcar811601916.edit', compact('testCar811601916'));
    }

    public function show(TestCar811601916 $testCar811601916)
    {
        return view('admin.testcar811601916.show', compact('testCar811601916'));
    }
}
