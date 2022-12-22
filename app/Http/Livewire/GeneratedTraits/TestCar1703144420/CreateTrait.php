<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1703144420;

use App\Models\TestCar1703144420;
                use App\Models\TestCar22062506276;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1703144420 $testCar1703144420;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1703144420->save();

        return redirect()->route('admin.testCar1703144420.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1703144420.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1703144420.billie_pfannerstill_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
