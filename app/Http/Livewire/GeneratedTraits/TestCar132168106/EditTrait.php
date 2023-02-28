<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar132168106;

use App\Models\TestCar132168106;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar132168106 $testCar132168106;

                        
    public function mount(TestCar132168106 $testCar132168106)
    {
        $this->testCar132168106 = $testCar132168106;
                                }

    public function render()
    {
        return view('livewire.generated.test-car132168106.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar132168106->save();

        return redirect()->route('laragen.admin.test_car132168106s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar132168106.test' => [
                                                                                                                ],
                    ];
    }
}
