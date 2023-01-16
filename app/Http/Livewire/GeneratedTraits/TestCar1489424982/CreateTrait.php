<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1489424982;

use App\Models\TestCar1489424982;
                use App\Models\TestCar2429006559;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1489424982 $testCar1489424982;

                                    public Collection $testCar2429006559s;
            
    public function mount(TestCar1489424982 $testCar1489424982)
    {
        $this->testCar1489424982 = $testCar1489424982;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1489424982->save();

        return redirect()->route('laragentestCar1489424982s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1489424982.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1489424982.earnestine_schoen_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
