<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar762609144;

use App\Models\TestCar762609144;
                use App\Models\TestCar21637253738;
    use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar762609144 $testCar762609144;

                                    public Collection $testCar21637253738s;
            
    public function mount(TestCar762609144 $testCar762609144)
    {
        $this->testCar762609144 = $testCar762609144;
                                                                            }

    public function submit()
    {
        $this->validate();

        $this->testCar762609144->save();

        return redirect()->route('laragentest_car762609144s.index');
    }

    public function rules(): array
    {
        return [
                                                'testCar762609144.test' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                                                'testCar762609144.natalia_heller_id' => [
                                                            'string',
                                                                'nullable',
                                                                'required',
                                                                            ],
                    ];
    }
}
