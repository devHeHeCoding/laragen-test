<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1110355267;

use App\Models\TestCar1110355267;
                    use App\Models\TestCar2300018130;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1110355267 $testCar1110355267;

                                            
    public function mount(TestCar1110355267 $testCar1110355267)
    {
        $this->testCar1110355267 = $testCar1110355267;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1110355267.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1110355267->save();

        return redirect()->route('laragen.admin.test_car1110355267s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1110355267.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1110355267.arvid_walker_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
