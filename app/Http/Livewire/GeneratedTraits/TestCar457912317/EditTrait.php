<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar457912317;

use App\Models\TestCar457912317;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar457912317 $testCar457912317;

    
    public function mount(TestCar457912317 $testCar457912317)
    {
        $this->testCar457912317 = $testCar457912317;
            }

    public function render()
    {
        return view('livewire.generated.test-car457912317.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar457912317->save();

        return redirect()->route('laragen.admin.test_car457912317s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar457912317.test' => [
                                                                                ],
                    ];
    }
}
