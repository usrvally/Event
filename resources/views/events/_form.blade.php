<input type="text" name="title" placeholder="Titre de l'evenement" value="{{ old('title') ?? $event->title }}" >
<br>
{!! $errors->first('title', '<p class="error">:message</p>')!!}
<textarea name="description" id="" cols="30" rows="10" 
placeholder="Decription de l'evenement">{{ old('description') ?? $event->description }}</textarea>
<br>
{!! $errors->first('description', '<p class="error">:message</p>')!!}
<input type="submit" value="{{$submitButtonText}}">
</form>