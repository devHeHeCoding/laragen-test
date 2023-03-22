<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car851673644.fields.test') }}" for="7" :errors="$errors->get('testCar851673644.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car851673644.fields.test')}}" name="testCar851673644.test" id="7" wire:model.defer="testCar851673644.test" />
</x-laragen::input.group>