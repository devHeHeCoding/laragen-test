<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar171292457;

use App\Models\TestCar171292457;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar171292457 $testCar171292457;

                        
    public function mount(TestCar171292457 $testCar171292457)
    {
        $this->testCar171292457 = $testCar171292457;
                                }

    public function render()
    {
        return view('livewire.generated.test-car171292457.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar171292457->save();

        return redirect()->route('laragen.admin.test_car171292457s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar171292457.test' => [
                                                                                                                ],
                    ];
    }
}
