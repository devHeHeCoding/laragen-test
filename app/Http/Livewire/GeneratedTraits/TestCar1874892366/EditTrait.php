<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1874892366;

use App\Models\TestCar1874892366;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1874892366 $testCar1874892366;

    
    public function mount(TestCar1874892366 $testCar1874892366)
    {
        $this->testCar1874892366 = $testCar1874892366;
            }

    public function render()
    {
        return view('livewire.generated.test-car1874892366.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1874892366->save();

        return redirect()->route('laragen.admin.test_car1874892366s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1874892366.test' => [
                                                                                ],
                    ];
    }
}
