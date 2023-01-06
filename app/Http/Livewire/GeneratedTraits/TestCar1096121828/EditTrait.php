<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1096121828;

use App\Models\TestCar1096121828;
                use App\Models\TestCar22145735245;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1096121828 $testCar1096121828;

    public function mount(TestCar1096121828 $testCar1096121828)
    {
        $this->testCar1096121828 = $testCar1096121828;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1096121828->save();

        return redirect()->route('admin.testCar1096121828.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1096121828.test' => [
                                                                                                                ],
                                                'testCar1096121828.virginia_runolfsson_id' => [
                                                                                                                ],
                    ];
    }
}
