<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar465918373;

use App\Models\TestCar465918373;
                use App\Models\TestCar22090234732;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar465918373 $testCar465918373;

    public function mount(TestCar465918373 $testCar465918373)
    {
        $this->testCar465918373 = $testCar465918373;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar465918373->save();

        return redirect()->route('admin.testCar465918373.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar465918373.test' => [
                                                                                                                ],
                                                'testCar465918373.holden_sawayn_sr._id' => [
                                                                                                                ],
                    ];
    }
}
