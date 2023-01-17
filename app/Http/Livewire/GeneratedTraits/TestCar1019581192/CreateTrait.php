<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1019581192;

use App\Models\TestCar1019581192;
                use App\Models\TestCar21872094445;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1019581192 $testCar1019581192;

                                    public Collection $testCar21872094445s;
            
    public function mount(TestCar1019581192 $testCar1019581192)
    {
        $this->testCar1019581192 = $testCar1019581192;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1019581192->save();

        return redirect()->route('laragentest_car1019581192s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1019581192.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1019581192.tomas_bartoletti_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
