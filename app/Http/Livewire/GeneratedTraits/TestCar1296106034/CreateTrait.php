<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar1296106034;

use App\Models\TestCar1296106034;
use App\Models\TestCar2969810645;
        use Illuminate\Database\Eloquent\Collection;

trait CreateTrait
{
    public TestCar1296106034 $testCar1296106034;

                        
    public function mount(TestCar1296106034 $testCar1296106034)
    {
        $this->testCar1296106034 = $testCar1296106034;
                                }

    public function render()
    {
        return view('livewire.generated.test-car1296106034.create');
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
                                                                                    'required','string'
                                ],
                                                                    'testCar1296106034.brooks_hettinger_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
