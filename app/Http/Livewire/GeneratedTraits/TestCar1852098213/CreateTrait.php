<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1852098213;

use App\Models\TestCar1852098213;
                use App\Models\TestCar2421608141;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1852098213 $testCar1852098213;

                                            
    public function mount(TestCar1852098213 $testCar1852098213)
    {
        $this->testCar1852098213 = $testCar1852098213;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1852098213->save();

        return redirect()->route('laragen.admin.test_car1852098213s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1852098213.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2421608141s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
