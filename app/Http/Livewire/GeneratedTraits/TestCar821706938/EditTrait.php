<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar821706938;

use App\Models\TestCar821706938;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar821706938 $testCar821706938;

    
    public function mount(TestCar821706938 $testCar821706938)
    {
        $this->testCar821706938 = $testCar821706938;
            }

    public function render()
    {
        return view('livewire.generated.test-car821706938.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar821706938->save();

        return redirect()->route('laragen.admin.test_car821706938s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar821706938.test' => [
                                                                                ],
                    ];
    }
}
