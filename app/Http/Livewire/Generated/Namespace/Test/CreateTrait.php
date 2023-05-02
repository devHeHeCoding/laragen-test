<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1481583318;
use App\Models\TestCar21694196224;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar1481583318 $testCar1481583318;

                        
    public function mount(TestCar1481583318 $testCar1481583318)
    {
        $this->testCar1481583318 = $testCar1481583318;
                                            }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1481583318->save();
                            
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1481583318.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1481583318.prof._cletus_kerluke_v_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
