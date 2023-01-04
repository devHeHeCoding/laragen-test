<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar425762237;

use App\Models\TestCar425762237;
                use App\Models\TestCar250487792;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar425762237 $testCar425762237;

    public function mount(TestCar425762237 $testCar425762237)
    {
        $this->testCar425762237 = $testCar425762237;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar425762237->save();

        return redirect()->route('admin.testCar425762237.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar425762237.test' => [
                                                                                                                ],
                                                'testCar425762237.lisette_zulauf_id' => [
                                                                                                                ],
                    ];
    }
}
