<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar164808530;

use App\Models\TestCar164808530;
                use App\Models\TestCar21801769660;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar164808530 $testCar164808530;

                                            
    public function mount(TestCar164808530 $testCar164808530)
    {
        $this->testCar164808530 = $testCar164808530;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar164808530->save();

        return redirect()->route('laragen.admin.test_car164808530s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar164808530.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar164808530.mrs._tess_romaguera_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
