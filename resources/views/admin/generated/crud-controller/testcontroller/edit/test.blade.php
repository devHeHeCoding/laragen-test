<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car250640198.fields.test') }}" for="7" :errors="$errors->get('testCar250640198.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car250640198.fields.test')}}" name="testCar250640198.test" id="7" wire:model.defer="testCar250640198.test" />
</x-laragen::input.group>