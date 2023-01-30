<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar443855838;

use App\Models\TestCar443855838;
                use App\Models\TestCar21540040065;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar443855838 $testCar443855838;

                                            
    public function mount(TestCar443855838 $testCar443855838)
    {
        $this->testCar443855838 = $testCar443855838;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar443855838->save();

        return redirect()->route('laragen.admin.test_car443855838s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar443855838.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar443855838.name_russel_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
