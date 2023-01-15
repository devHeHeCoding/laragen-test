<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1076792425;

use App\Models\TestCar1076792425;
                use App\Models\TestCar2396308069;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1076792425 $testCar1076792425;

    public function mount(TestCar1076792425 $testCar1076792425)
    {
        $this->testCar1076792425 = $testCar1076792425;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1076792425->save();

        return redirect()->route('admin.testCar1076792425.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1076792425.test' => [
                                                                                                                ],
                                                'testCar1076792425.orland_ritchie_id' => [
                                                                                                                ],
                    ];
    }
}
