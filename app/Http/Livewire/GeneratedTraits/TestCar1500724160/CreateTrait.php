<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1500724160;

use App\Models\TestCar1500724160;
                use App\Models\TestCar21476805943;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1500724160 $testCar1500724160;

                                            
    public function mount(TestCar1500724160 $testCar1500724160)
    {
        $this->testCar1500724160 = $testCar1500724160;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1500724160->save();

        return redirect()->route('laragen.admin.test_car1500724160s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1500724160.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar21476805943s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
