<div class="form-group {{$errors->has('testCar500896906.ladarius_rutherford_id') ? 'error' : ''}}">
    <label for="3">
        {{ trans('cruds.test-car500896906.fields.ladarius_rutherford_id') }}        <input type="text"
               id="3"
               name="testCar500896906.ladarius_rutherford_id"
               class="form-control"
               placeholder="ladarius_rutherford_id"
               wire:model.defer="testCar500896906.ladarius_rutherford_id"
        >
        <span class="error-message">
            {{$errors->first('testCar500896906.ladarius_rutherford_id')}}        </span>
    </label>
</div>
