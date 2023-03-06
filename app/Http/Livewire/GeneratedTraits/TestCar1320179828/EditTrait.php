<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1320179828;

use App\Models\TestCar1320179828;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1320179828 $testCar1320179828;

                        
    public function mount(TestCar1320179828 $testCar1320179828)
    {
        $this->testCar1320179828 = $testCar1320179828;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1320179828.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1320179828->save();

        return redirect()->route('laragen.admin.test_car1320179828s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1320179828.test' => [
                                                                                ],
                    ];
    }
}
