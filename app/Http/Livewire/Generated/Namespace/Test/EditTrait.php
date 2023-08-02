<?php
    namespace App\Http\Livewire\Generated\Namespace\Test;

use App\Models\TestCar958059729;
    use Illuminate\Database\Eloquent\Collection;

/**
* Generated by LaraGen, Do not modify it manually.
* If you want to modify it, you should alter it in the corresponding Livewire Component:
    * `App\Http\Livewire\App\Namespace\Test\Edit`
*/
trait EditTrait
{
    public TestCar958059729 $testCar958059729;

    
    public function mount(TestCar958059729 $testCar958059729)
    {
        $this->testCar958059729 = $testCar958059729;
            }

    public function render()
    {
                    return view('livewire.generated.namespace.test.edit');
            }

    public function submit()
    {
        $this->validate();

        $this->testCar958059729->save();
        
                    return redirect()->route('laragen.admin.route.prefix.index');
            }

    public function rules(): array
    {
        return [
                                                                    'testCar958059729.test' => [
                                                                                ],
                    ];
    }
}
