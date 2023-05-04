<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar14444972;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar14444972 $testCar14444972;

    
    public function mount(TestCar14444972 $testCar14444972)
    {
        $this->testCar14444972 = $testCar14444972;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar14444972->save();
        
        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar14444972.test' => [
                                                                                ],
                    ];
    }
}
