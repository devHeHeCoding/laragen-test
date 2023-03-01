<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1302454223;

use App\Models\TestCar1302454223;
                    use App\Models\TestCar2753418857;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1302454223 $testCar1302454223;

                                            
    public function mount(TestCar1302454223 $testCar1302454223)
    {
        $this->testCar1302454223 = $testCar1302454223;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1302454223.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1302454223->save();

        return redirect()->route('laragen.admin.test_car1302454223s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1302454223.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1302454223.torrance_kling_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
