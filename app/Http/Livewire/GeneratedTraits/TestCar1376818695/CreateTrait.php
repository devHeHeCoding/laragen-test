<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1376818695;

use App\Models\TestCar1376818695;
                    use App\Models\TestCar2165075592;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1376818695 $testCar1376818695;

                                            
    public function mount(TestCar1376818695 $testCar1376818695)
    {
        $this->testCar1376818695 = $testCar1376818695;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1376818695.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1376818695->save();

        return redirect()->route('laragen.admin.test_car1376818695s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1376818695.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1376818695.isabell_botsford_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
