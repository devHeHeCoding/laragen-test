<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar672712618;

use App\Models\TestCar672712618;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar672712618 $testCar672712618;

                        
    public function mount(TestCar672712618 $testCar672712618)
    {
        $this->testCar672712618 = $testCar672712618;
                                }

    public function render()
    {
        return view('livewire.generated.test-car672712618.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->testCar672712618->save();

        return redirect()->route('laragen.admin.test_car672712618s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar672712618.test' => [
                                                                                                                ],
                    ];
    }
}
