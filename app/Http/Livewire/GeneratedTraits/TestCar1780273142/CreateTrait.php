<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1780273142;

use App\Models\TestCar1780273142;
                    use App\Models\TestCar22134990307;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1780273142 $testCar1780273142;

                                            
    public function mount(TestCar1780273142 $testCar1780273142)
    {
        $this->testCar1780273142 = $testCar1780273142;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1780273142.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1780273142->save();

        return redirect()->route('laragen.admin.test_car1780273142s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1780273142.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1780273142.laura_green_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
