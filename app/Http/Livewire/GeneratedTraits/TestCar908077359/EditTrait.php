<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar908077359;

use App\Models\TestCar908077359;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar908077359 $testCar908077359;

    
    public function mount(TestCar908077359 $testCar908077359)
    {
        $this->testCar908077359 = $testCar908077359;
            }

    public function render()
    {
        return view('livewire.generated.test-car908077359.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar908077359->save();

        return redirect()->route('laragen.admin.test_car908077359s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar908077359.test' => [
                                                                                ],
                    ];
    }
}
