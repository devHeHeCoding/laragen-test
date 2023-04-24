<x-laragen::input.group class="px-2 w-full" label="{{ @trans('cruds.test-car923219578.fields.test') }}" for="7" :errors="$errors->get('testCar923219578.test')" >
    <x-laragen::input.text type="number" placeholder="{{ trans('global.add') }} {{ trans('cruds.test-car923219578.fields.test')}}" name="testCar923219578.test" id="7" wire:model.defer="testCar923219578.test" />
</x-laragen::input.group>