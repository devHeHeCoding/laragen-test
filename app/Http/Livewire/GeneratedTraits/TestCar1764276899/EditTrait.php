<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1764276899;

use App\Models\TestCar1764276899;
                use App\Models\TestCar22121382639;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1764276899 $testCar1764276899;

    public function mount(TestCar1764276899 $testCar1764276899)
    {
        $this->testCar1764276899 = $testCar1764276899;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1764276899->save();

        return redirect()->route('admin.testCar1764276899.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1764276899.test' => [
                                                                                                                ],
                                                'testCar1764276899.arnaldo_terry_id' => [
                                                                                                                ],
                    ];
    }
}
