<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar2006926948;

use App\Models\TestCar2006926948;
                use App\Models\TestCar21820345916;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2006926948 $testCar2006926948;

                                    public Collection $testCar21820345916s;
            
    public function mount(TestCar2006926948 $testCar2006926948)
    {
        $this->testCar2006926948 = $testCar2006926948;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar2006926948->save();

        return redirect()->route('laragentestCar2006926948s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar2006926948.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2006926948.dr._sheridan_labadie_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
