<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2053709948;

use App\Models\TestCar2053709948;
                use App\Models\TestCar21450021589;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2053709948 $testCar2053709948;

                                    public Collection $testCar21450021589s;
            
    public function mount(TestCar2053709948 $testCar2053709948)
    {
        $this->testCar2053709948 = $testCar2053709948;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2053709948->save();

        return redirect()->route('laragentestCar2053709948s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2053709948.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2053709948.nathen_hane_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
