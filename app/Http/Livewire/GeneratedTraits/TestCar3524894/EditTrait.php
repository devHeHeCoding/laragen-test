<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar3524894;

use App\Models\TestCar3524894;
                use App\Models\TestCar2126788346;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar3524894 $testCar3524894;

    public function mount(TestCar3524894 $testCar3524894)
    {
        $this->testCar3524894 = $testCar3524894;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar3524894->save();

        return redirect()->route('admin.testCar3524894.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar3524894.test' => [
                                                                                                                ],
                                                'testCar3524894.glen_mann_id' => [
                                                                                                                ],
                    ];
    }
}
