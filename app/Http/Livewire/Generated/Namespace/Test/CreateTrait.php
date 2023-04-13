<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar194840499;
use App\Models\TestCar21565901696;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar194840499 $testCar194840499;

                        
    public function mount(TestCar194840499 $testCar194840499)
    {
        $this->testCar194840499 = $testCar194840499;
                                }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar194840499->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar194840499.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar194840499.lizeth_ritchie_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
