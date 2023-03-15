<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1159592761;

use App\Models\TestCar1159592761;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1159592761 $testCar1159592761;

    
    public function mount(TestCar1159592761 $testCar1159592761)
    {
        $this->testCar1159592761 = $testCar1159592761;
            }

    public function render()
    {
        return view('livewire.generated.test-car1159592761.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1159592761->save();

        return redirect()->route('laragen.admin.test_car1159592761s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1159592761.test' => [
                                                                                ],
                    ];
    }
}
