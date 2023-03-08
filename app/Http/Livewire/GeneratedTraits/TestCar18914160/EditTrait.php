<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar18914160;

use App\Models\TestCar18914160;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar18914160 $testCar18914160;

                        
    public function mount(TestCar18914160 $testCar18914160)
    {
        $this->testCar18914160 = $testCar18914160;
                                }

    public function render()
    {
        return view('livewire.generated.test-car18914160.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar18914160->save();

        return redirect()->route('laragen.admin.test_car18914160s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar18914160.test' => [
                                                                                ],
                    ];
    }
}
