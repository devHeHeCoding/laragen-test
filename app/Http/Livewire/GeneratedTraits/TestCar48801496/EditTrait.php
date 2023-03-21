<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar48801496;

use App\Models\TestCar48801496;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar48801496 $testCar48801496;

    
    public function mount(TestCar48801496 $testCar48801496)
    {
        $this->testCar48801496 = $testCar48801496;
            }

    public function render()
    {
        return view('livewire.generated.test-car48801496.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar48801496->save();

        return redirect()->route('laragen.admin.test_car48801496s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar48801496.test' => [
                                                                                ],
                    ];
    }
}
