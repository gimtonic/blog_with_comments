<label for="">Статус</label>
<select class="form-control" name="published">
    @if (isset($post->id))
        <option value="Не опубликовано" @if ($post->published == "Не опубликовано") selected="" @endif>Не опубликовано</option>
        <option value="Опубликовано" @if ($post->published == "Опубликовано") selected="" @endif>Опубликовано</option>
    @else
        <option value="Не опубликовано">Не опубликовано</option>
        <option value="Опубликовано">Опубликовано</option>
    @endif
</select>

<label for="">Заголовок</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок новости" value="{{$post->title or ""}}" required>

<label for="">Краткое описание</label>
<textarea name="short_description" id="short_description" class="form-control">{{$post->short_description or ""}}</textarea>

<label for="">Полное описание</label>
<textarea name="long_description" id="long_description" class="form-control">{{$post->long_description or ""}}</textarea>

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">