<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1689475383;

use App\Models\TestCar1689475383;
                use App\Models\TestCar22038701134;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1689475383 $testCar1689475383;

                                            
    public function mount()
    {
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1689475383->save();

        return redirect()->route('admin.testCar1689475383.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1689475383.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1689475383.mariano_wyman_d_v_m_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
