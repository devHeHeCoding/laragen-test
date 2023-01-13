<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar226442035;

use App\Models\TestCar226442035;
                use App\Models\TestCar21223279918;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar226442035 $testCar226442035;

    public function mount(TestCar226442035 $testCar226442035)
    {
        $this->testCar226442035 = $testCar226442035;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar226442035->save();

        return redirect()->route('admin.testCar226442035.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar226442035.test' => [
                                                                                                                ],
                                                'testCar226442035.lexus_beahan_i_i_id' => [
                                                                                                                ],
                    ];
    }
}
