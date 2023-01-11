<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1754918598;

use App\Models\TestCar1754918598;
                use App\Models\TestCar270677603;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar1754918598 $testCar1754918598;

    public function mount(TestCar1754918598 $testCar1754918598)
    {
        $this->testCar1754918598 = $testCar1754918598;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1754918598->save();

        return redirect()->route('admin.testCar1754918598.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar1754918598.test' => [
                                                                                                                ],
                                                'testCar1754918598.dr._bret_glover_id' => [
                                                                                                                ],
                    ];
    }
}
