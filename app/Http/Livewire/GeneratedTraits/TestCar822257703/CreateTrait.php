<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar822257703;

use App\Models\TestCar822257703;
                    use App\Models\TestCar21154936442;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar822257703 $testCar822257703;

                                            
    public function mount(TestCar822257703 $testCar822257703)
    {
        $this->testCar822257703 = $testCar822257703;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car822257703.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar822257703->save();

        return redirect()->route('laragen.admin.test_car822257703s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar822257703.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar822257703.ms._chanel_spencer_sr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
