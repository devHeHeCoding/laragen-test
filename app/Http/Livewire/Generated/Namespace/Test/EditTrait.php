<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar520226322;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
* `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar520226322 $testCar520226322;

    
    public function mount(TestCar520226322 $testCar520226322)
    {
        $this->testCar520226322 = $testCar520226322;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar520226322->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar520226322.test' => [
                                                                                ],
                    ];
    }
}
