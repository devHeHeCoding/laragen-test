<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar98040217;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar98040217 $testCar98040217;

    
    public function mount(TestCar98040217 $testCar98040217)
    {
        $this->testCar98040217 = $testCar98040217;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar98040217->save();
        
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar98040217.test' => [
                                                                                ],
                    ];
    }
}
