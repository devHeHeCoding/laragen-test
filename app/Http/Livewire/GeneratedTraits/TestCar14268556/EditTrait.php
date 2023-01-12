<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar14268556;

use App\Models\TestCar14268556;
                use App\Models\TestCar2935725681;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar14268556 $testCar14268556;

    public function mount(TestCar14268556 $testCar14268556)
    {
        $this->testCar14268556 = $testCar14268556;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar14268556->save();

        return redirect()->route('laragentestCar14268556.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar14268556.test' => [
                                                                                                                ],
                                                'testCar14268556.arnoldo_labadie_id' => [
                                                                                                                ],
                    ];
    }
}
