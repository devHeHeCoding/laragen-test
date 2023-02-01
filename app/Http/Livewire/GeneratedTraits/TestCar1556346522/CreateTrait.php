<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1556346522;

use App\Models\TestCar1556346522;
                use App\Models\TestCar2530127545;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1556346522 $testCar1556346522;

                                            
    public function mount(TestCar1556346522 $testCar1556346522)
    {
        $this->testCar1556346522 = $testCar1556346522;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1556346522->save();

        return redirect()->route('laragen.admin.test_car1556346522s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1556346522.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1556346522.lavina_dietrich_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
