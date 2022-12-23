<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar429275288;

use App\Models\TestCar429275288;
                use App\Models\TestCar2491971111;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar429275288 $testCar429275288;

    public function mount(TestCar429275288 $testCar429275288)
    {
        $this->testCar429275288 = $testCar429275288;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar429275288->save();

        return redirect()->route('admin.testCar429275288.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar429275288.test' => [
                                                                                                                ],
                                                'testCar429275288.newell_quitzon_i_v_id' => [
                                                                                                                ],
                    ];
    }
}
