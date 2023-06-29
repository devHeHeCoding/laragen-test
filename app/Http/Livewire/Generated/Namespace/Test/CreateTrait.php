<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1255711560;
use App\Models\TestCar2707193122;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar1255711560 $testCar1255711560;

                        
    public function mount(TestCar1255711560 $testCar1255711560)
    {
        $this->testCar1255711560 = $testCar1255711560;
                                            }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1255711560->save();
                            
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1255711560.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1255711560.ahmad_jaskolski_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
