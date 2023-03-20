<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar252691639;

use App\Models\TestCar252691639;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar252691639 $testCar252691639;

    
    public function mount(TestCar252691639 $testCar252691639)
    {
        $this->testCar252691639 = $testCar252691639;
            }

    public function render()
    {
        return view('livewire.generated.test-car252691639.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar252691639->save();

        return redirect()->route('laragen.admin.test_car252691639s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar252691639.test' => [
                                                                                ],
                    ];
    }
}
