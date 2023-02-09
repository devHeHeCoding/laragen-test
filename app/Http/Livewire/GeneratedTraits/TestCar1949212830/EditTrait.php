<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1949212830;

use App\Models\TestCar1949212830;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1949212830 $testCar1949212830;

                        
    public function mount(TestCar1949212830 $testCar1949212830)
    {
        $this->testCar1949212830 = $testCar1949212830;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1949212830.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1949212830->save();

        return redirect()->route('laragen.admin.test_car1949212830s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1949212830.test' => [
                                                                                                                ],
                    ];
    }
}
