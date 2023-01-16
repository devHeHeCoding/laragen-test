<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar544368840;

use App\Models\TestCar544368840;
                use App\Models\TestCar2384870723;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar544368840 $testCar544368840;

                                    public Collection $testCar2384870723s;
            
    public function mount(TestCar544368840 $testCar544368840)
    {
        $this->testCar544368840 = $testCar544368840;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar544368840->save();

        return redirect()->route('laragentestCar544368840.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar544368840.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar544368840.thaddeus_langosh_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
