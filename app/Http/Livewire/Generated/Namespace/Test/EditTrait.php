<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar515234683;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar515234683 $testCar515234683;

    
    public function mount(TestCar515234683 $testCar515234683)
    {
        $this->testCar515234683 = $testCar515234683;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar515234683->save();
        
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar515234683.test' => [
                                                                                ],
                    ];
    }
}
