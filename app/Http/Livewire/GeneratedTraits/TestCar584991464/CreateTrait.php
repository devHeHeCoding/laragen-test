<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar584991464;

use App\Models\TestCar584991464;
                    use App\Models\TestCar2246734916;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar584991464 $testCar584991464;

                                            
    public function mount(TestCar584991464 $testCar584991464)
    {
        $this->testCar584991464 = $testCar584991464;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car584991464.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar584991464->save();

        return redirect()->route('laragen.admin.test_car584991464s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar584991464.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar584991464.miss_alana_lowe_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
