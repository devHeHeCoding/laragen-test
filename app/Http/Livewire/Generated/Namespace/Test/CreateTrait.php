<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1498983619;
use App\Models\TestCar22138376989;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar1498983619 $testCar1498983619;

                        
    public function mount(TestCar1498983619 $testCar1498983619)
    {
        $this->testCar1498983619 = $testCar1498983619;
                                            }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1498983619->save();
                            
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1498983619.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1498983619.miss_marian_tillman_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
