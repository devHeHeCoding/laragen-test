<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar704618589;

use App\Models\TestCar704618589;
                use App\Models\TestCar2787107900;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar704618589 $testCar704618589;

                                            
    public function mount(TestCar704618589 $testCar704618589)
    {
        $this->testCar704618589 = $testCar704618589;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar704618589->save();

        return redirect()->route('laragen.admin.test_car704618589s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar704618589.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar704618589.cecilia_boehm_i_i_i_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
