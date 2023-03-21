<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car338518119.fields.test') }}" for="7" :errors="$errors->get('testCar338518119.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car338518119.fields.test')}}" name="testCar338518119.test" id="7" wire:model.defer="testCar338518119.test" />
</x-laragen::input.group>