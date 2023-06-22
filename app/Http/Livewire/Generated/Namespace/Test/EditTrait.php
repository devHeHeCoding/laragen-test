<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar2132963918;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar2132963918 $testCar2132963918;

    
    public function mount(TestCar2132963918 $testCar2132963918)
    {
        $this->testCar2132963918 = $testCar2132963918;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2132963918->save();
        
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2132963918.test' => [
                                                                                ],
                    ];
    }
}
