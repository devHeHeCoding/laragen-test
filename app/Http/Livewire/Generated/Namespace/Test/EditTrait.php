<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1817101688;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar1817101688 $testCar1817101688;

    
    public function mount(TestCar1817101688 $testCar1817101688)
    {
        $this->testCar1817101688 = $testCar1817101688;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1817101688->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1817101688.test' => [
                                                                                ],
                    ];
    }
}
