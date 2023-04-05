<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1577444852;
use App\Models\TestCar21179465726;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait CreateTrait
{
    public TestCar1577444852 $testCar1577444852;

                        
    public function mount(TestCar1577444852 $testCar1577444852)
    {
        $this->testCar1577444852 = $testCar1577444852;
                                }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1577444852->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1577444852.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar1577444852.caleb_mc_glynn_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
