<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar851673644;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar851673644 $testCar851673644;

    
    public function mount(TestCar851673644 $testCar851673644)
    {
        $this->testCar851673644 = $testCar851673644;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar851673644->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar851673644.test' => [
                                                                                ],
                    ];
    }
}
