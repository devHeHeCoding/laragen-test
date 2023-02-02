<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1629897200;

use App\Models\TestCar1629897200;
                use App\Models\TestCar2616643266;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1629897200 $testCar1629897200;

                                            
    public function mount(TestCar1629897200 $testCar1629897200)
    {
        $this->testCar1629897200 = $testCar1629897200;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1629897200->save();

        return redirect()->route('laragen.admin.test_car1629897200s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1629897200.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1629897200.karine_schumm_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
