<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar990725055;
use App\Models\TestCar2956719111;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar990725055 $testCar990725055;

                        
    public function mount(TestCar990725055 $testCar990725055)
    {
        $this->testCar990725055 = $testCar990725055;
                                            }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar990725055->save();
                            
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar990725055.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar990725055.dr._green_jacobi_i_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
