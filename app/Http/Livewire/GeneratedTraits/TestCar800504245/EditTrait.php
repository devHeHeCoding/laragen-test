<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar800504245;

use App\Models\TestCar800504245;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar800504245 $testCar800504245;

    
    public function mount(TestCar800504245 $testCar800504245)
    {
        $this->testCar800504245 = $testCar800504245;
            }

    public function render()
    {
        return view('livewire.generated.test-car800504245.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar800504245->save();

        return redirect()->route('laragen.admin.test_car800504245s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar800504245.test' => [
                                                                                ],
                    ];
    }
}
