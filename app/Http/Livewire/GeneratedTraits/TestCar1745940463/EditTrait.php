<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1745940463;

use App\Models\TestCar1745940463;
                use App\Models\TestCar21086904143;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1745940463 $testCar1745940463;

    public function mount(TestCar1745940463 $testCar1745940463)
    {
        $this->testCar1745940463 = $testCar1745940463;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1745940463->save();

        return redirect()->route('admin.testCar1745940463.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1745940463.test' => [
                                                                                                                ],
                                                'testCar1745940463.ms._roslyn_kihn_ph_d_id' => [
                                                                                                                ],
                    ];
    }
}
