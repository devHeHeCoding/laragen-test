<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar1817550501;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait EditTrait
{
    public TestCar1817550501 $testCar1817550501;

    
    public function mount(TestCar1817550501 $testCar1817550501)
    {
        $this->testCar1817550501 = $testCar1817550501;
            }

    public function render()
    {
        return view('livewire.generated.namespace.test.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar1817550501->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar1817550501.test' => [
                                                                                ],
                    ];
    }
}
