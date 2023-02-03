<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar955786819;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar955786819.index');
    }

    public function create()
    {
        return view('admin.testcar955786819.create');
    }

    public function edit(TestCar955786819 $testCar955786819)
    {
        return view('admin.testcar955786819.edit', compact('testCar955786819'));
    }

    public function show(TestCar955786819 $testCar955786819)
    {
        return view('admin.testcar955786819.show', compact('testCar955786819'));
    }
}
