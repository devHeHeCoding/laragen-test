<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar484856353;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar484856353 $testCar484856353;

    
    public function mount(TestCar484856353 $testCar484856353)
    {
        $this->testCar484856353 = $testCar484856353;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar484856353->save();
        
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar484856353.test' => [
                                                                                ],
                    ];
    }
}
