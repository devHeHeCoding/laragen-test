<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar590167015;

use App\Models\TestCar590167015;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar590167015 $testCar590167015;

    
    public function mount(TestCar590167015 $testCar590167015)
    {
        $this->testCar590167015 = $testCar590167015;
            }

    public function render()
    {
        return view('livewire.generated.test-car590167015.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar590167015->save();

        return redirect()->route('laragen.admin.test_car590167015s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar590167015.test' => [
                                                                                ],
                    ];
    }
}
