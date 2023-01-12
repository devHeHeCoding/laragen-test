<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1914410034;

use App\Models\TestCar1914410034;
                use App\Models\TestCar21668703268;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1914410034 $testCar1914410034;

    public function mount(TestCar1914410034 $testCar1914410034)
    {
        $this->testCar1914410034 = $testCar1914410034;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1914410034->save();

        return redirect()->route('admin.testCar1914410034.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1914410034.test' => [
                                                                                                                ],
                                                'testCar1914410034.marlee_hettinger_id' => [
                                                                                                                ],
                    ];
    }
}
