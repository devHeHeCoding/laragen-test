<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar723896777;

use App\Models\TestCar723896777;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar723896777 $testCar723896777;

    
    public function mount(TestCar723896777 $testCar723896777)
    {
        $this->testCar723896777 = $testCar723896777;
            }

    public function render()
    {
        return view('livewire.generated.test-car723896777.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar723896777->save();

        return redirect()->route('laragen.admin.test_car723896777s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar723896777.test' => [
                                                                                ],
                    ];
    }
}
