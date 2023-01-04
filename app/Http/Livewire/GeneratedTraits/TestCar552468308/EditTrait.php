<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar552468308;

use App\Models\TestCar552468308;
                use App\Models\TestCar2894090599;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar552468308 $testCar552468308;

    public function mount(TestCar552468308 $testCar552468308)
    {
        $this->testCar552468308 = $testCar552468308;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar552468308->save();

        return redirect()->route('admin.testCar552468308.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar552468308.test' => [
                                                                                                                ],
                                                'testCar552468308.augustine_greenfelder_id' => [
                                                                                                                ],
                    ];
    }
}
