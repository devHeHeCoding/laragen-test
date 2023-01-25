<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar623301657;

use App\Models\TestCar623301657;
                use App\Models\TestCar2344387994;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar623301657 $testCar623301657;

                                            
    public function mount(TestCar623301657 $testCar623301657)
    {
        $this->testCar623301657 = $testCar623301657;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar623301657->save();

        return redirect()->route('laragen.admin.test_car623301657s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar623301657.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar623301657.dr._doyle_heaney_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
