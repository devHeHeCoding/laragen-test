<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1974465717;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar1974465717 $testCar1974465717;

    
    public function mount(TestCar1974465717 $testCar1974465717)
    {
        $this->testCar1974465717 = $testCar1974465717;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1974465717->save();
        
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1974465717.test' => [
                                                                                ],
                    ];
    }
}
