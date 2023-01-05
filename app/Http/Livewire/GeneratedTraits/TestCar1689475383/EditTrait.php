<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1689475383;

use App\Models\TestCar1689475383;
                use App\Models\TestCar22038701134;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1689475383 $testCar1689475383;

    public function mount(TestCar1689475383 $testCar1689475383)
    {
        $this->testCar1689475383 = $testCar1689475383;
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
                                                                                                                ],
                                                'testCar1689475383.mariano_wyman_d_v_m_id' => [
                                                                                                                ],
                    ];
    }
}
