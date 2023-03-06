<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1044631486;

use App\Models\TestCar1044631486;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1044631486 $testCar1044631486;

                        
    public function mount(TestCar1044631486 $testCar1044631486)
    {
        $this->testCar1044631486 = $testCar1044631486;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1044631486.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1044631486->save();

        return redirect()->route('laragen.admin.test_car1044631486s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1044631486.test' => [
                                                                                ],
                    ];
    }
}
