<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car957666109.fields.test') }}" for="7" :errors="$errors->get('testCar957666109.test')" >
    <x-laragen::input.text placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car957666109.fields.test')}}" name="testCar957666109.test" id="7" wire:model.defer="testCar957666109.test" />
</x-laragen::input.group>