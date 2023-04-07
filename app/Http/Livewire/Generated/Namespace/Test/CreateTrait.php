<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1825043652;
use App\Models\TestCar2978570751;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait CreateTrait
{
    public TestCar1825043652 $testCar1825043652;

                        
    public function mount(TestCar1825043652 $testCar1825043652)
    {
        $this->testCar1825043652 = $testCar1825043652;
                                }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1825043652->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1825043652.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1825043652.phoebe_breitenberg_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
