<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar191098059;

use App\Models\TestCar191098059;
                use App\Models\TestCar2960122796;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar191098059 $testCar191098059;

    public function mount(TestCar191098059 $testCar191098059)
    {
        $this->testCar191098059 = $testCar191098059;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar191098059->save();

        return redirect()->route('admin.testCar191098059.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar191098059.test' => [
                                                                                                                ],
                                                'testCar191098059.avery_olson_ph_d_id' => [
                                                                                                                ],
                    ];
    }
}
