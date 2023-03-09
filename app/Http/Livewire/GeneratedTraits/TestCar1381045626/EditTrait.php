<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1381045626;

use App\Models\TestCar1381045626;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1381045626 $testCar1381045626;

                        
    public function mount(TestCar1381045626 $testCar1381045626)
    {
        $this->testCar1381045626 = $testCar1381045626;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1381045626.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1381045626->save();

        return redirect()->route('laragen.admin.test_car1381045626s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1381045626.test' => [
                                                                                ],
                    ];
    }
}
