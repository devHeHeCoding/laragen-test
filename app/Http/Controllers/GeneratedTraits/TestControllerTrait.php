<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar729726562;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar729726562.index');
    }

    public function create()
    {
        return view('admin.testcar729726562.create');
    }

    public function edit(TestCar729726562 $testCar729726562)
    {
        return view('admin.testcar729726562.edit', compact('testCar729726562'));
    }

    public function show(TestCar729726562 $testCar729726562)
    {
        return view('admin.testcar729726562.show', compact('testCar729726562'));
    }
}
