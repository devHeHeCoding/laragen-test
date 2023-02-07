<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar385831353;

use App\Models\TestCar385831353;
                    use App\Models\TestCar2879920396;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar385831353 $testCar385831353;

                                            
    public function mount(TestCar385831353 $testCar385831353)
    {
        $this->testCar385831353 = $testCar385831353;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car385831353.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar385831353->save();

        return redirect()->route('laragen.admin.test_car385831353s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar385831353.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar385831353.evalyn_mc_dermott_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
