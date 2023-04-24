<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1624325347;
use App\Models\TestCar2595332023;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar1624325347 $testCar1624325347;

                        
    public function mount(TestCar1624325347 $testCar1624325347)
    {
        $this->testCar1624325347 = $testCar1624325347;
                                            }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1624325347->save();
                            
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1624325347.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1624325347.dr._jessica_o&#039;_connell_i_i_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
