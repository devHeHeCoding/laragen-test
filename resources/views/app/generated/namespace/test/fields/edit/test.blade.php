<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car495112153.fields.test') }}" for="7" :errors="$errors->get('testCar495112153.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car495112153.fields.test')}}" name="testCar495112153.test" id="7" wire:model.defer="testCar495112153.test" />
</x-laragen::input.group>