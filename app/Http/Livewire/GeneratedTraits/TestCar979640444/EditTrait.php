<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar979640444;

use App\Models\TestCar979640444;
                use App\Models\TestCar21696761545;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                            
    public TestCar979640444 $testCar979640444;

    public function mount(TestCar979640444 $testCar979640444)
    {
        $this->testCar979640444 = $testCar979640444;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar979640444->save();

        return redirect()->route('admin.testCar979640444.index');
    }

    public function validation(): array
    {
        return [
                                                'testCar979640444.test' => [
                                                                                                                ],
                                                'testCar979640444.jalon_rowe_i_v_id' => [
                                                                                                                ],
                    ];
    }
}
