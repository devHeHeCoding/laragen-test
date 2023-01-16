<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar70042958;

use App\Models\TestCar70042958;
                use App\Models\TestCar21308173778;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar70042958 $testCar70042958;

                                    public Collection $testCar21308173778s;
            
    public function mount(TestCar70042958 $testCar70042958)
    {
        $this->testCar70042958 = $testCar70042958;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar70042958->save();

        return redirect()->route('laragentestCar70042958s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar70042958.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar70042958.carlos_brown_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
