<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar674423168;
use App\Models\TestCar2366176765;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar674423168 $testCar674423168;

                        
    public function mount(TestCar674423168 $testCar674423168)
    {
        $this->testCar674423168 = $testCar674423168;
                                            }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar674423168->save();
                            
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar674423168.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar674423168.carissa_bins_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
