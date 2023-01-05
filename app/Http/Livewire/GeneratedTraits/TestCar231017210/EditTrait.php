<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar231017210;

use App\Models\TestCar231017210;
                use App\Models\TestCar2793656958;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar231017210 $testCar231017210;

    public function mount(TestCar231017210 $testCar231017210)
    {
        $this->testCar231017210 = $testCar231017210;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar231017210->save();

        return redirect()->route('admin.testCar231017210.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar231017210.test' => [
                                                                                                                ],
                                                'testCar231017210.dr._abelardo_ritchie_d_d_s_id' => [
                                                                                                                ],
                    ];
    }
}
