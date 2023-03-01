<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2033733895;

use App\Models\TestCar2033733895;
                    use App\Models\TestCar2305220254;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar2033733895 $testCar2033733895;

                                            
    public function mount(TestCar2033733895 $testCar2033733895)
    {
        $this->testCar2033733895 = $testCar2033733895;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car2033733895.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2033733895->save();

        return redirect()->route('laragen.admin.test_car2033733895s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2033733895.test' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                                                                    'testCar2033733895.carmine_roob_id' => [
                                                    'string',
                                                    'nullable',
                                                    'required',
                                                                ],
                    ];
    }
}
