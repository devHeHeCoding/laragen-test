<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar642865241;

use App\Models\TestCar642865241;
                use App\Models\TestCar2929148638;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2929148638s;
            
    public TestCar642865241 $testCar642865241;

    public function mount(TestCar642865241 $testCar642865241)
    {
        $this->testCar642865241 = $testCar642865241;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar642865241->save();

        return redirect()->route('laragentestCar642865241s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar642865241.test' => [
                                                                                                                ],
                                                'testCar642865241.tyra_koch_id' => [
                                                                                                                ],
                    ];
    }
}
