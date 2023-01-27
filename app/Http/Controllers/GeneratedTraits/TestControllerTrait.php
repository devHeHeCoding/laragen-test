<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar209071879;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar209071879.index');
    }

    public function create()
    {
        return view('admin.testcar209071879.create');
    }

    public function edit(TestCar209071879 $testCar209071879)
    {
        return view('admin.testcar209071879.edit', compact('testCar209071879'));
    }

    public function show(TestCar209071879 $testCar209071879)
    {
        return view('admin.testcar209071879.show', compact('testCar209071879'));
    }
}
