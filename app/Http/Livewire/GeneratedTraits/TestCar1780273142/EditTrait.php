<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1780273142;

use App\Models\TestCar1780273142;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1780273142 $testCar1780273142;

                        
    public function mount(TestCar1780273142 $testCar1780273142)
    {
        $this->testCar1780273142 = $testCar1780273142;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1780273142.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1780273142->save();

        return redirect()->route('laragen.admin.test_car1780273142s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1780273142.test' => [
                                                                                                                ],
                    ];
    }
}
