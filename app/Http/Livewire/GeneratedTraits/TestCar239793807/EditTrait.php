<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar239793807;

use App\Models\TestCar239793807;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar239793807 $testCar239793807;

                        
    public function mount(TestCar239793807 $testCar239793807)
    {
        $this->testCar239793807 = $testCar239793807;
                                }

    public function render()
    {
        return view('livewire.generated.test-car239793807.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar239793807->save();

        return redirect()->route('laragen.admin.test_car239793807s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar239793807.test' => [
                                                                                                                ],
                    ];
    }
}
