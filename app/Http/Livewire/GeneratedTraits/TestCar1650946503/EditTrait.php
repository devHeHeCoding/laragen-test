<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1650946503;

use App\Models\TestCar1650946503;
                use App\Models\TestCar213895648;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1650946503 $testCar1650946503;

    public function mount(TestCar1650946503 $testCar1650946503)
    {
        $this->testCar1650946503 = $testCar1650946503;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1650946503->save();

        return redirect()->route('admin.testCar1650946503.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1650946503.test' => [
                                                                                                                ],
                                                'testCar1650946503.seth_hermiston_id' => [
                                                                                                                ],
                    ];
    }
}
