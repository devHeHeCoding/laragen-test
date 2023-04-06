<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1884542556;
use App\Models\TestCar291487033;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait CreateTrait
{
    public TestCar1884542556 $testCar1884542556;

                        
    public function mount(TestCar1884542556 $testCar1884542556)
    {
        $this->testCar1884542556 = $testCar1884542556;
                                }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1884542556->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1884542556.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1884542556.mr._german_langworth_m_d_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
