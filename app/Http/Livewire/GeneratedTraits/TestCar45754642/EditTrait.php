<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar45754642;

use App\Models\TestCar45754642;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar45754642 $testCar45754642;

                        
    public function mount(TestCar45754642 $testCar45754642)
    {
        $this->testCar45754642 = $testCar45754642;
                                }

    public function render()
    {
        return view('livewire.generated.test-car45754642.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar45754642->save();

        return redirect()->route('laragen.admin.test_car45754642s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar45754642.test' => [
                                                                                                                ],
                    ];
    }
}
