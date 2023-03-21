<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car995898570.fields.test') }}" for="7" :errors="$errors->get('testCar995898570.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car995898570.fields.test')}}" name="testCar995898570.test" id="7" wire:model.defer="testCar995898570.test" />
</x-laragen::input.group>