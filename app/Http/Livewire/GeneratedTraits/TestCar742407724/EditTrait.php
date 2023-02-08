<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar742407724;

use App\Models\TestCar742407724;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar742407724 $testCar742407724;

                        
    public function mount(TestCar742407724 $testCar742407724)
    {
        $this->testCar742407724 = $testCar742407724;
                                }

    public function render()
    {
        return view('livewire.generated.test-car742407724.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar742407724->save();

        return redirect()->route('laragen.admin.test_car742407724s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar742407724.test' => [
                                                                                                                ],
                    ];
    }
}
