<label>{{$label}}:</label>
<input
    type="text"
    name="{{$name}}"
    placeholder="{{$placeholder}}"
    class="border @error($name) border-red-500 @else border-black @enderror"
>
@error($name)
<div class="text-red-500">{{$message}}</div>
@enderror
        value="{{old($name,$value)}}"
