<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar2000577556;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar2000577556 $testCar2000577556;

    
    public function mount(TestCar2000577556 $testCar2000577556)
    {
        $this->testCar2000577556 = $testCar2000577556;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar2000577556->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar2000577556.test' => [
                                                                                ],
                    ];
    }
}
