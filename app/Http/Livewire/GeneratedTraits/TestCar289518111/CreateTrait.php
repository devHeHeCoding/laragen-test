<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar289518111;

use App\Models\TestCar289518111;
                    use App\Models\TestCar271940798;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar289518111 $testCar289518111;

                                            
    public function mount(TestCar289518111 $testCar289518111)
    {
        $this->testCar289518111 = $testCar289518111;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car289518111.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar289518111->save();

        return redirect()->route('laragen.admin.test_car289518111s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar289518111.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar289518111.olga_mc_kenzie_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
