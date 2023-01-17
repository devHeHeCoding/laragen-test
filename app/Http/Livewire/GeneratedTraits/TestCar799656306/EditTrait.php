<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar799656306;

use App\Models\TestCar799656306;
                use App\Models\TestCar2693778747;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
                                    public Collection $testCar2693778747s;
            
    public TestCar799656306 $testCar799656306;

    public function mount(TestCar799656306 $testCar799656306)
    {
        $this->testCar799656306 = $testCar799656306;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar799656306->save();

        return redirect()->route('laragentestCar799656306s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar799656306.test' => [
                                                                                                                ],
                                                'testCar799656306.dr._murl_hayes_i_v_id' => [
                                                                                                                ],
                    ];
    }
}
