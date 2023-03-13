<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar662858584;

use App\Models\TestCar662858584;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar662858584 $testCar662858584;

    
    public function mount(TestCar662858584 $testCar662858584)
    {
        $this->testCar662858584 = $testCar662858584;
            }

    public function render()
    {
        return view('livewire.generated.test-car662858584.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar662858584->save();

        return redirect()->route('laragen.admin.test_car662858584s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar662858584.test' => [
                                                                                ],
                    ];
    }
}
