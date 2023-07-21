<?php
    namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar894785610;
use App\Models\TestCar21890946432;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
    * `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar894785610 $testCar894785610;

    
                        
    public function mount(TestCar894785610 $testCar894785610)
    {
        $this->testCar894785610 = $testCar894785610;
                                            }

    public function render()
    {
                    return view('livewire.generated.namespace.test.create');
            }

    public function submit()
    {
        $this->validate();

                    $this->testCar894785610->save();
        
                            
                    return redirect()->route('laragen.admin.route.prefix.index');
            }

    public function rules(): array
    {
        return [
                                                                    'testCar894785610.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar894785610.coby_willms_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
