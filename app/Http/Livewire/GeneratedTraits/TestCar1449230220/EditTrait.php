<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1449230220;

use App\Models\TestCar1449230220;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1449230220 $testCar1449230220;

                        
    public function mount(TestCar1449230220 $testCar1449230220)
    {
        $this->testCar1449230220 = $testCar1449230220;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1449230220.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1449230220->save();

        return redirect()->route('laragen.admin.test_car1449230220s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1449230220.test' => [
                                                                                                                ],
                    ];
    }
}
