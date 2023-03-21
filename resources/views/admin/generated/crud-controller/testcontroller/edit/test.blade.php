<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car369693455.fields.test') }}" for="7" :errors="$errors->get('testCar369693455.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car369693455.fields.test')}}" name="testCar369693455.test" id="7" wire:model.defer="testCar369693455.test" />
</x-laragen::input.group>