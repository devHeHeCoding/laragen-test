<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1733562679;

use App\Models\TestCar1733562679;
                use App\Models\TestCar2450081752;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2450081752s;
            
    public TestCar1733562679 $testCar1733562679;

    public function mount(TestCar1733562679 $testCar1733562679)
    {
        $this->testCar1733562679 = $testCar1733562679;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1733562679->save();

        return redirect()->route('laragentestCar1733562679s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1733562679.test' => [
                                                                                                                ],
                                                'testCar1733562679.katrine_goldner_ph_d_id' => [
                                                                                                                ],
                    ];
    }
}
