<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1409118617;
use App\Models\TestCar21276520009;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Create`
*/
trait CreateTrait
{
    public TestCar1409118617 $testCar1409118617;

                        
    public function mount(TestCar1409118617 $testCar1409118617)
    {
        $this->testCar1409118617 = $testCar1409118617;
                                            }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1409118617->save();
                            
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1409118617.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1409118617.dr._bailey_funk_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
