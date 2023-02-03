<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1965271382;

use App\Models\TestCar1965271382;
                use App\Models\TestCar2936200579;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1965271382 $testCar1965271382;

                                            
    public function mount(TestCar1965271382 $testCar1965271382)
    {
        $this->testCar1965271382 = $testCar1965271382;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1965271382->save();

        return redirect()->route('laragen.admin.test_car1965271382s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1965271382.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1965271382.bert_stamm_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
