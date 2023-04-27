<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar914269002;
use App\Models\TestCar21512670340;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar914269002 $testCar914269002;

                        
    public function mount(TestCar914269002 $testCar914269002)
    {
        $this->testCar914269002 = $testCar914269002;
                                            }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar914269002->save();
                            
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar914269002.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar914269002.dr._austyn_lueilwitz_v_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
