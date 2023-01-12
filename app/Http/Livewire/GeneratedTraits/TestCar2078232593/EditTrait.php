<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2078232593;

use App\Models\TestCar2078232593;
                use App\Models\TestCar2637589180;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar2078232593 $testCar2078232593;

    public function mount(TestCar2078232593 $testCar2078232593)
    {
        $this->testCar2078232593 = $testCar2078232593;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2078232593->save();

        return redirect()->route('admin.testCar2078232593.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar2078232593.test' => [
                                                                                                                ],
                                                'testCar2078232593.lindsay_kulas_id' => [
                                                                                                                ],
                    ];
    }
}
