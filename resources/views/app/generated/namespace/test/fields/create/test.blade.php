<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car1909773371.fields.test') }}" for="7" :errors="$errors->get('testCar1909773371.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car1909773371.fields.test')}}" name="testCar1909773371.test" id="7" wire:model.defer="testCar1909773371.test" />
</x-laragen::input.group>