<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar926858672;

use App\Models\TestCar926858672;
                use App\Models\TestCar21842593496;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar926858672 $testCar926858672;

                                            
    public function mount(TestCar926858672 $testCar926858672)
    {
        $this->testCar926858672 = $testCar926858672;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar926858672->save();

        return redirect()->route('laragen.admin.test_car926858672s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar926858672.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar926858672.brittany_wunsch_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
