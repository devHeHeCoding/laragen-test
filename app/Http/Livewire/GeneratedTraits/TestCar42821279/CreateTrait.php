<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar42821279;

use App\Models\TestCar42821279;
                use App\Models\TestCar2110571407;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar42821279 $testCar42821279;

                                    public Collection $testCar2110571407s;
            
    public function mount(TestCar42821279 $testCar42821279)
    {
        $this->testCar42821279 = $testCar42821279;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar42821279->save();

        return redirect()->route('laragentestCar42821279s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar42821279.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar42821279.greyson_kessler_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
