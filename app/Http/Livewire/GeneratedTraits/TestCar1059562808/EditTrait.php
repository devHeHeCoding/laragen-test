<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1059562808;

use App\Models\TestCar1059562808;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1059562808 $testCar1059562808;

    
    public function mount(TestCar1059562808 $testCar1059562808)
    {
        $this->testCar1059562808 = $testCar1059562808;
            }

    public function render()
    {
        return view('livewire.generated.test-car1059562808.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1059562808->save();

        return redirect()->route('laragen.admin.test_car1059562808s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1059562808.test' => [
                                                                                ],
                    ];
    }
}
