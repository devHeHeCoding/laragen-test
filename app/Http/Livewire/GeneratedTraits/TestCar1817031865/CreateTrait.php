<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1817031865;

use App\Models\TestCar1817031865;
                    use App\Models\TestCar21220430729;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1817031865 $testCar1817031865;

                                            
    public function mount(TestCar1817031865 $testCar1817031865)
    {
        $this->testCar1817031865 = $testCar1817031865;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1817031865.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1817031865->save();

        return redirect()->route('laragen.admin.test_car1817031865s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1817031865.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar1817031865.jarret_pacocha_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
