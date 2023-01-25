<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1777235595;

use App\Models\TestCar1777235595;
                use App\Models\TestCar21012824489;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1777235595 $testCar1777235595;

                                            
    public function mount(TestCar1777235595 $testCar1777235595)
    {
        $this->testCar1777235595 = $testCar1777235595;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1777235595->save();

        return redirect()->route('laragen.admin.test_car1777235595s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1777235595.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1777235595.mr._lincoln_metz_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
