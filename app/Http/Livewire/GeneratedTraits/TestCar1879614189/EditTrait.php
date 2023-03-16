<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1879614189;

use App\Models\TestCar1879614189;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1879614189 $testCar1879614189;

                        
    public function mount(TestCar1879614189 $testCar1879614189)
    {
        $this->testCar1879614189 = $testCar1879614189;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1879614189.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1879614189->save();

        return redirect()->route('laragen.admin.test_car1879614189s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1879614189.test' => [
                                                                                                                ],
                    ];
    }
}
