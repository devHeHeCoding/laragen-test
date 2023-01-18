<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1306769521;

use App\Models\TestCar1306769521;
                use App\Models\TestCar2826983129;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1306769521 $testCar1306769521;

                                    public Collection $testCar2826983129s;
            
    public function mount(TestCar1306769521 $testCar1306769521)
    {
        $this->testCar1306769521 = $testCar1306769521;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar1306769521->save();

        return redirect()->route('laragentest_car1306769521s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1306769521.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1306769521.brisa_bednar_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
