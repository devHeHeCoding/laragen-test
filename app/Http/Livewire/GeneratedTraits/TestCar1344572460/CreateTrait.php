<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1344572460;

use App\Models\TestCar1344572460;
                use App\Models\TestCar2543125571;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1344572460 $testCar1344572460;

                                            
    public function mount(TestCar1344572460 $testCar1344572460)
    {
        $this->testCar1344572460 = $testCar1344572460;
                                                    }

    public function submit()
    {
        $this->validate();

        $this->testCar1344572460->save();

        return redirect()->route('laragen.admin.test_car1344572460s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar1344572460.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar2543125571s' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
