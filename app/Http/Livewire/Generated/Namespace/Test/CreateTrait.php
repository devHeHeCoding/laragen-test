<?php
    namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1804533024;
use App\Models\TestCar21959497135;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
    * `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar1804533024 $testCar1804533024;

    
                        
    public function mount(TestCar1804533024 $testCar1804533024)
    {
        $this->testCar1804533024 = $testCar1804533024;
                                            }

    public function render()
    {
                    return view('livewire.generated.namespace.test.create');
            }

    public function submit()
    {
        $this->validate();

                    $this->testCar1804533024->save();
        
                            
                    return redirect()->route('laragen.admin.route.prefix.index');
            }

    public function rules(): array
    {
        return [
                                                                    'testCar1804533024.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1804533024.miss_elinor_friesen_d_v_m_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
