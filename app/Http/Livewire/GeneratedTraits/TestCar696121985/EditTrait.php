<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar696121985;

use App\Models\TestCar696121985;
                use App\Models\TestCar2537177740;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar696121985 $testCar696121985;

    public function mount(TestCar696121985 $testCar696121985)
    {
        $this->testCar696121985 = $testCar696121985;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar696121985->save();

        return redirect()->route('laragentestCar696121985.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar696121985.test' => [
                                                                                                                ],
                                                'testCar696121985.antwon_west_i_i_id' => [
                                                                                                                ],
                    ];
    }
}
