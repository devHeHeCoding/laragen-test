<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1070024050;

use App\Models\TestCar1070024050;
                    use App\Models\TestCar21210797441;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1070024050 $testCar1070024050;

                                            
    public function mount(TestCar1070024050 $testCar1070024050)
    {
        $this->testCar1070024050 = $testCar1070024050;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1070024050.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1070024050->save();

        return redirect()->route('laragen.admin.test_car1070024050s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1070024050.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1070024050.landen_quitzon_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
