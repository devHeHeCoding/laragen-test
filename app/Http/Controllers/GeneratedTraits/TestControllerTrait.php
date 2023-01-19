<?php
namespace App\Http\Controllers\GeneratedTraits;

use App\Models\TestCar704618589;

trait TestControllerTrait
{
    public function index()
    {
        return view('admin.testcar704618589.index');
    }

    public function create()
    {
        return view('admin.testcar704618589.create');
    }

    public function edit(TestCar704618589 $testcar704618589)
    {
        return view('admin.testcar704618589.edit', compact('testcar704618589'));
    }

    public function show(TestCar704618589 $testcar704618589)
    {
        return view('admin.testcar704618589.show', compact('testcar704618589'));
    }
}
