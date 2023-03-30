<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar547814872;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar547814872 $testCar547814872;

    
    public function mount(TestCar547814872 $testCar547814872)
    {
        $this->testCar547814872 = $testCar547814872;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar547814872->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar547814872.test' => [
                                                                                ],
                    ];
    }
}
