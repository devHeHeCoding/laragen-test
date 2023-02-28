<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1376813211;

use App\Models\TestCar1376813211;
                    use App\Models\TestCar21823395211;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1376813211 $testCar1376813211;

                                            
    public function mount(TestCar1376813211 $testCar1376813211)
    {
        $this->testCar1376813211 = $testCar1376813211;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1376813211.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1376813211->save();

        return redirect()->route('laragen.admin.test_car1376813211s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1376813211.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1376813211.buster_von_rueden_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
