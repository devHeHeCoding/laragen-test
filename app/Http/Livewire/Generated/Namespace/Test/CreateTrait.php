<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar521786102;
use App\Models\TestCar22058055915;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait CreateTrait
{
    public TestCar521786102 $testCar521786102;

                        
    public function mount(TestCar521786102 $testCar521786102)
    {
        $this->testCar521786102 = $testCar521786102;
                                }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar521786102->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar521786102.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar521786102.mrs._kathleen_hyatt_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
