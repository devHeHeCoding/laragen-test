<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar2110186441;

use App\Models\TestCar2110186441;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar2110186441 $testCar2110186441;

    
    public function mount(TestCar2110186441 $testCar2110186441)
    {
        $this->testCar2110186441 = $testCar2110186441;
            }

    public function render()
    {
        return view('livewire.generated.test-car2110186441.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2110186441->save();

        return redirect()->route('laragen.admin.test_car2110186441s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2110186441.test' => [
                                                                                ],
                    ];
    }
}
