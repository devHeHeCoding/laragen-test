<?php
namespace App\Http\Livewire\GeneratedTraits\TestCar276494793;

use App\Models\TestCar276494793;
        use Illuminate\Database\Eloquent\Collection;

trait EditTrait
{
    public TestCar276494793 $testCar276494793;

                        
    public function mount(TestCar276494793 $testCar276494793)
    {
        $this->testCar276494793 = $testCar276494793;
                                }

    public function submit()
    {
        $this->validate();

        $this->testCar276494793->save();

        return redirect()->route('laragen.admin.test_car276494793s.index');
    }

    public function rules(): array
    {
        return [
                                                                    'testCar276494793.test' => [
                                                                                                                ],
                    ];
    }
}
