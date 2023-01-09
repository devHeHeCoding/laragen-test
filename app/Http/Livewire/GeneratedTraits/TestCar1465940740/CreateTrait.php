<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1465940740;

use App\Models\TestCar1465940740;
                use App\Models\TestCar22012854665;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1465940740 $testCar1465940740;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1465940740->save();

        return redirect()->route('admin.testCar1465940740.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1465940740.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1465940740.bud_kihn_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
