<?php

namespace App\Http\Livewire\GeneratedTraits\TestCar1018804859;

trait IndexTrait
{
    public array $paginationOptions;

    public int $perPage;

    public string $search = '';

    public TestCar1018804859 $testcar1018804859;

    public function mount()
    {
        $this->perPage           = 10;
        $this->paginationOptions = config('project.pagination.options');
    }

    public function render()
    {
        $query = TestCar1018804859::advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => 'id',
            'order_direction' => 'asc',
        ]);
        $items = $query->paginate($this->perPage);

        return view('livewire.testcar1018804859.index', compact('items', 'query'));
    }
}
