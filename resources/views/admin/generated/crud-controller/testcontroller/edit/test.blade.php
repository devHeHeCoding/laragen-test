<div class="form-group {{$errors->has('testCar453760717.test') ? 'error' : ''}}">
    <label for="7">
        {{ trans('cruds.test-car453760717.fields.test') }}        <input type="number"
               id="7"
               name="testCar453760717.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar453760717.test"
        >
        <span class="error-message">
            {{$errors->first('testCar453760717.test')}}        </span>
    </label>
</div>
