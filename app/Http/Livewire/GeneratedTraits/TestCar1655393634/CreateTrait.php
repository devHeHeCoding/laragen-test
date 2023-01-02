<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1655393634;

use App\Models\TestCar1655393634;
                use App\Models\TestCar2687408942;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1655393634 $testCar1655393634;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1655393634->save();

        return redirect()->route('admin.testCar1655393634.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1655393634.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1655393634.gertrude_beahan_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
