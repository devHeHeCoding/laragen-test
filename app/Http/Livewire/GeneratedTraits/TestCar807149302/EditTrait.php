<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar807149302;

use App\Models\TestCar807149302;
                use App\Models\TestCar21177451419;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar807149302 $testCar807149302;

    public function mount(TestCar807149302 $testCar807149302)
    {
        $this->testCar807149302 = $testCar807149302;
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
                                                                                                                ],
                                                'testCar807149302.harrison_mayer_d_v_m_id' => [
                                                                                                                ],
                    ];
    }
}
