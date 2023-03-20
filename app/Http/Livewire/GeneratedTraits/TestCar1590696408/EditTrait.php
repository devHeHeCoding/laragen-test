<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1590696408;

use App\Models\TestCar1590696408;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1590696408 $testCar1590696408;

    
    public function mount(TestCar1590696408 $testCar1590696408)
    {
        $this->testCar1590696408 = $testCar1590696408;
            }

    public function render()
    {
        return view('livewire.generated.test-car1590696408.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1590696408->save();

        return redirect()->route('laragen.admin.test_car1590696408s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1590696408.test' => [
                                                                                ],
                    ];
    }
}
