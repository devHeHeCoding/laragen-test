<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar346650498;

use App\Models\TestCar346650498;
                use App\Models\TestCar2339846692;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar346650498 $testCar346650498;

                                            
    public function mount(TestCar346650498 $testCar346650498)
    {
        $this->testCar346650498 = $testCar346650498;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar346650498->save();

        return redirect()->route('laragen.admin.test_car346650498s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar346650498.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar346650498.lonzo_towne_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
