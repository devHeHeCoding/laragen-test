<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1197168722;

use App\Models\TestCar1197168722;
                use App\Models\TestCar21372888980;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1197168722 $testCar1197168722;

                                    public Collection $testCar21372888980s;
            
    public function mount(TestCar1197168722 $testCar1197168722)
    {
        $this->testCar1197168722 = $testCar1197168722;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1197168722->save();

        return redirect()->route('laragentest_car1197168722s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1197168722.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1197168722.adolph_stark_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
