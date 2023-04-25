<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar584964822;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar584964822 $testCar584964822;

    
    public function mount(TestCar584964822 $testCar584964822)
    {
        $this->testCar584964822 = $testCar584964822;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar584964822->save();
        
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar584964822.test' => [
                                                                                ],
                    ];
    }
}
