<div class="form-group">
    <label for="7">
        {{ trans('cruds.test-car2126254712.fields.test') }}        <input type="number"
               id="7"
               name="testCar2126254712.test"
               class="form-control"
               placeholder="test"
               wire:model.defer="testCar2126254712.test"
        >
        <span class="error-message">
            errorMessage
        </span>
    </label>
</div>
