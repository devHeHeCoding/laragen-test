<x-laragen::input.group required class="px-2 w-full" label="{{ @trans('cruds.test-car596818515.fields.test') }}" for="7" :errors="$errors->get('testCar596818515.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car596818515.fields.test')}}" name="testCar596818515.test" id="7" wire:model.defer="testCar596818515.test" />
</x-laragen::input.group>