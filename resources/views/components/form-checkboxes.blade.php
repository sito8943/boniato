<div class="mb-4">
    @include('components.form_label')
    <fieldset>
        @foreach($options as $key => $label)
            <div>
                <input type="checkbox" name="{{$name}}[]" value="{{$key}}" @if(in_array($key, old($name,$values))) checked @endif />
                <label>{{$label}}</label>
            </div>
        @endforeach
    </fieldset>
    @include('components.form_error')
</div>
