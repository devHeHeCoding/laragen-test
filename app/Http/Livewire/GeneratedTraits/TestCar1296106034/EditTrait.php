<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1296106034;

use App\Models\TestCar1296106034;
    use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar1296106034 $testCar1296106034;

    
    public function mount(TestCar1296106034 $testCar1296106034)
    {
        $this->testCar1296106034 = $testCar1296106034;
            }

    public function render()
    {
        return view('livewire.generated.test-car1296106034.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1296106034->save();

        return redirect()->route('laragen.admin.test_car1296106034s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1296106034.test' => [
                                                                                ],
                    ];
    }
}
