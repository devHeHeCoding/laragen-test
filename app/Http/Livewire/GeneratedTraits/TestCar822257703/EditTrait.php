<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar822257703;

use App\Models\TestCar822257703;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar822257703 $testCar822257703;

                        
    public function mount(TestCar822257703 $testCar822257703)
    {
        $this->testCar822257703 = $testCar822257703;
                                }

    public function render()
    {
        return view('livewire.generated.test-car822257703.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar822257703->save();

        return redirect()->route('laragen.admin.test_car822257703s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar822257703.test' => [
                                                                                                                ],
                    ];
    }
}
