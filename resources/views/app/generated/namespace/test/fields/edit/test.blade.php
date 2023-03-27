<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car153211461.fields.test') }}" for="7" :errors="$errors->get('testCar153211461.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car153211461.fields.test')}}" name="testCar153211461.test" id="7" wire:model.defer="testCar153211461.test" />
</x-laragen::input.group>