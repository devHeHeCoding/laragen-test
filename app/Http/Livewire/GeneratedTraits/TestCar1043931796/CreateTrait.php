<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1043931796;

use App\Models\TestCar1043931796;
                use App\Models\TestCar21874596528;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1043931796 $testCar1043931796;

                                            
    public function mount(TestCar1043931796 $testCar1043931796)
    {
        $this->testCar1043931796 = $testCar1043931796;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1043931796->save();

        return redirect()->route('laragen.admin.test_car1043931796s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1043931796.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar1043931796.simone_weber_ph_d_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
