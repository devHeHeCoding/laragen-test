<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car924683350.fields.test') }}" for="7" :errors="$errors->get('testCar924683350.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car924683350.fields.test')}}" name="testCar924683350.test" id="7" wire:model.defer="testCar924683350.test" />
</x-laragen::input.group>