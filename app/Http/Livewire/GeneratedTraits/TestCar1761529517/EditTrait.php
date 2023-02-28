<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1761529517;

use App\Models\TestCar1761529517;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1761529517 $testCar1761529517;

                        
    public function mount(TestCar1761529517 $testCar1761529517)
    {
        $this->testCar1761529517 = $testCar1761529517;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1761529517.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1761529517->save();

        return redirect()->route('laragen.admin.test_car1761529517s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1761529517.test' => [
                                                                                                                ],
                    ];
    }
}
