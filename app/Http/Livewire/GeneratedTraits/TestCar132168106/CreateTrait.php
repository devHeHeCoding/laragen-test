<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar132168106;

use App\Models\TestCar132168106;
                    use App\Models\TestCar2152474347;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar132168106 $testCar132168106;

                                            
    public function mount(TestCar132168106 $testCar132168106)
    {
        $this->testCar132168106 = $testCar132168106;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car132168106.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar132168106->save();

        return redirect()->route('laragen.admin.test_car132168106s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar132168106.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar132168106.mr._isaiah_dickens_i_v_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
