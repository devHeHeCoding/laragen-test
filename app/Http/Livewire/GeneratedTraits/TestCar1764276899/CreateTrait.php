<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1764276899;

use App\Models\TestCar1764276899;
                use App\Models\TestCar22121382639;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1764276899 $testCar1764276899;

                                            
    public function mount()
    {
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
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1764276899.arnaldo_terry_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
