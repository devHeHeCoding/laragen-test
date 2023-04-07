<?php
namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar4305551;
use App\Models\TestCar21768860789;
        use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
*/
trait CreateTrait
{
    public TestCar4305551 $testCar4305551;

                        
    public function mount(TestCar4305551 $testCar4305551)
    {
        $this->testCar4305551 = $testCar4305551;
                                }

    public function render()
    {
        return view('livewire.generated.namespace.test.create');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar4305551->save();

        return redirect()->route('laragen.admin.route.prefix.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar4305551.test' => [
                                                                                    'required','string'
                                ],
                                                                    'testCar4305551.prof._elwyn_bergnaum_id' => [
                                                                                    'required','string'
                                ],
                    ];
    }
}
