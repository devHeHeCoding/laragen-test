<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar723382524;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar723382524 $testCar723382524;

    
    public function mount(TestCar723382524 $testCar723382524)
    {
        $this->testCar723382524 = $testCar723382524;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar723382524->save();
        
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar723382524.test' => [
                                                                                ],
                    ];
    }
}
