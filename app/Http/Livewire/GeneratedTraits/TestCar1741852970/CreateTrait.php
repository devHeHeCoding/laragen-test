<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1741852970;

use App\Models\TestCar1741852970;
                    use App\Models\TestCar21776285290;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1741852970 $testCar1741852970;

                                            
    public function mount(TestCar1741852970 $testCar1741852970)
    {
        $this->testCar1741852970 = $testCar1741852970;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1741852970.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1741852970->save();

        return redirect()->route('laragen.admin.test_car1741852970s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1741852970.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1741852970.courtney_conroy_jr._id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
