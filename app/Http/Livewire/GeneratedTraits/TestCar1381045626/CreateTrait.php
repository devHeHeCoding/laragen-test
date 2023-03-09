<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1381045626;

use App\Models\TestCar1381045626;
            use App\Models\TestCar2170510129;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1381045626 $testCar1381045626;

                                            
    public function mount(TestCar1381045626 $testCar1381045626)
    {
        $this->testCar1381045626 = $testCar1381045626;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1381045626.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1381045626->save();

        return redirect()->route('laragen.admin.test_car1381045626s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1381045626.test' => [
                                                                                ],
                                                                    'testCar1381045626.miss_eulalia_haley_sr._id' => [
                                                                                ],
                    ];
    }
}
