<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar376579347;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar376579347 $testCar376579347;

    
    public function mount(TestCar376579347 $testCar376579347)
    {
        $this->testCar376579347 = $testCar376579347;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar376579347->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar376579347.test' => [
                                                                                ],
                    ];
    }
}
