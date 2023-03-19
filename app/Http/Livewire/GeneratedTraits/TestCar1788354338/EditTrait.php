<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1788354338;

use App\Models\TestCar1788354338;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1788354338 $testCar1788354338;

    
    public function mount(TestCar1788354338 $testCar1788354338)
    {
        $this->testCar1788354338 = $testCar1788354338;
            }

    public function render()
    {
        return view('livewire.generated.test-car1788354338.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1788354338->save();

        return redirect()->route('laragen.admin.test_car1788354338s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1788354338.test' => [
                                                                                ],
                    ];
    }
}
