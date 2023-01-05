<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1455935900;

use App\Models\TestCar1455935900;
                use App\Models\TestCar2859287200;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1455935900 $testCar1455935900;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1455935900->save();

        return redirect()->route('admin.testCar1455935900.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1455935900.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1455935900.katrina_kiehn_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
