<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1425819819;

use App\Models\TestCar1425819819;
                    use App\Models\TestCar278691889;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1425819819 $testCar1425819819;

                                            
    public function mount(TestCar1425819819 $testCar1425819819)
    {
        $this->testCar1425819819 = $testCar1425819819;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1425819819.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1425819819->save();

        return redirect()->route('laragen.admin.test_car1425819819s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1425819819.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1425819819.connie_moen_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
