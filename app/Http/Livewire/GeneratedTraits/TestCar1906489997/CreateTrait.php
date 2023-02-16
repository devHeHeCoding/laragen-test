<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1906489997;

use App\Models\TestCar1906489997;
                    use App\Models\TestCar21910132136;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1906489997 $testCar1906489997;

                                            
    public function mount(TestCar1906489997 $testCar1906489997)
    {
        $this->testCar1906489997 = $testCar1906489997;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1906489997.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1906489997->save();

        return redirect()->route('laragen.admin.test_car1906489997s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1906489997.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1906489997.joseph_schaefer_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
