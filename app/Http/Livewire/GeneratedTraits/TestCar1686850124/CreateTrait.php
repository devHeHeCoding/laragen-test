<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1686850124;

use App\Models\TestCar1686850124;
                    use App\Models\TestCar21754238248;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1686850124 $testCar1686850124;

                                            
    public function mount(TestCar1686850124 $testCar1686850124)
    {
        $this->testCar1686850124 = $testCar1686850124;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1686850124.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1686850124->save();

        return redirect()->route('laragen.admin.test_car1686850124s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1686850124.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1686850124.stewart_bartell_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
