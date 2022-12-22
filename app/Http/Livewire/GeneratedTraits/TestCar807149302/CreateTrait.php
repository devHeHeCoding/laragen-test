<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar807149302;

use App\Models\TestCar807149302;
                use App\Models\TestCar21177451419;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar807149302 $testCar807149302;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar807149302->save();

        return redirect()->route('admin.testCar807149302.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar807149302.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar807149302.harrison_mayer_d_v_m_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
