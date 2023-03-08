<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar738236358;

use App\Models\TestCar738236358;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar738236358 $testCar738236358;

                        
    public function mount(TestCar738236358 $testCar738236358)
    {
        $this->testCar738236358 = $testCar738236358;
                                }

    public function render()
    {
        return view('livewire.generated.test-car738236358.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar738236358->save();

        return redirect()->route('laragen.admin.test_car738236358s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar738236358.test' => [
                                                                                ],
                    ];
    }
}
