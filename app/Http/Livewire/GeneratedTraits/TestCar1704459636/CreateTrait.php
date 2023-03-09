<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1704459636;

use App\Models\TestCar1704459636;
            use App\Models\TestCar21533687298;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1704459636 $testCar1704459636;

                                            
    public function mount(TestCar1704459636 $testCar1704459636)
    {
        $this->testCar1704459636 = $testCar1704459636;
                                                    }

    public function render()
    {
        return view('livewire.generated.test-car1704459636.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1704459636->save();

        return redirect()->route('laragen.admin.test_car1704459636s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1704459636.test' => [
                                                                                ],
                                                                    'testCar1704459636.garth_batz_sr._id' => [
                                                                                ],
                    ];
    }
}
