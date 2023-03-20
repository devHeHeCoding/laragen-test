<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar17145504;

use App\Models\TestCar17145504;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar17145504 $testCar17145504;

    
    public function mount(TestCar17145504 $testCar17145504)
    {
        $this->testCar17145504 = $testCar17145504;
            }

    public function render()
    {
        return view('livewire.generated.test-car17145504.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar17145504->save();

        return redirect()->route('laragen.admin.test_car17145504s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar17145504.test' => [
                                                                                ],
                    ];
    }
}
