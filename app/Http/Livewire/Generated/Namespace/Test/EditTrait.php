<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1611957243;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar1611957243 $testCar1611957243;

    
    public function mount(TestCar1611957243 $testCar1611957243)
    {
        $this->testCar1611957243 = $testCar1611957243;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1611957243->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1611957243.test' => [
                                                                                ],
                    ];
    }
}
