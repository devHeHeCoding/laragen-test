<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1998510017;

use App\Models\TestCar1998510017;
                use App\Models\TestCar21464498024;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1998510017 $testCar1998510017;

                                    public Collection $testCar21464498024s;
            
    public function mount(TestCar1998510017 $testCar1998510017)
    {
        $this->testCar1998510017 = $testCar1998510017;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1998510017->save();

        return redirect()->route('laragentestCar1998510017s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1998510017.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1998510017.prof._lilyan_gutmann_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
