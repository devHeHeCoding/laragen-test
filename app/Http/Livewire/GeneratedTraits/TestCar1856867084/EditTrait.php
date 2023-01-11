<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1856867084;

use App\Models\TestCar1856867084;
                use App\Models\TestCar21098114544;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1856867084 $testCar1856867084;

    public function mount(TestCar1856867084 $testCar1856867084)
    {
        $this->testCar1856867084 = $testCar1856867084;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1856867084->save();

        return redirect()->route('admin.testCar1856867084.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1856867084.test' => [
                                                                                                                ],
                                                'testCar1856867084.amalia_hudson_id' => [
                                                                                                                ],
                    ];
    }
}
