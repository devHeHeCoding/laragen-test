<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1616682440;

use App\Models\TestCar1616682440;
                    use App\Models\TestCar21637026723;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1616682440 $testCar1616682440;

                                            
    public function mount(TestCar1616682440 $testCar1616682440)
    {
        $this->testCar1616682440 = $testCar1616682440;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1616682440.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1616682440->save();

        return redirect()->route('laragen.admin.test_car1616682440s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1616682440.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1616682440.alvis_bednar_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
