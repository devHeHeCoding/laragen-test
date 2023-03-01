<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar169681796;

use App\Models\TestCar169681796;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar169681796 $testCar169681796;

                        
    public function mount(TestCar169681796 $testCar169681796)
    {
        $this->testCar169681796 = $testCar169681796;
                                }

    public function render()
    {
        return view('livewire.generated.test-car169681796.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar169681796->save();

        return redirect()->route('laragen.admin.test_car169681796s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar169681796.test' => [
                                                                                                                ],
                    ];
    }
}
