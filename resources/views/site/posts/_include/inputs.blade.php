<div class="card-image">
    @isset($data->cover_image)
    <img src="{{ asset('storage/images/imagem_capa/'.$data->cover_image) }} ">
    @endisset

    <div class="card-content file-field input-field">
        <div class="btn">
            <span>Foto de capa</span>
        </div>
        <div class="file-path-wrapper">
            <input name="cover_image" class="file-path validate" type="file" value="@isset($data->cover_image) {{ $data->cover_image }}@endisset">
        </div>
    </div>

</div>

<div class="card-content">
    <div class="input-field col s12">
        <input type="text" class="validate" name="title" value="@isset($data->title){{ $data->title }} @endisset">
        <label for="title">Titulo</label>
    </div>
</div>

<div class="card-content">
    <div class="row">
        <div class="input-field col s12">
            <textarea type="text" class="materialize-textarea" name="body">@isset($data->body){{ $data->body }} @endisset</textarea>
            <label for="Texto">Texto</label>
        </div>
    </div>
</div>

<div class="card-content">
    <select  type="text" name="tags[]" multiple >
        <option disabled selected>Selecione uma ou mais tags</option>

        @php if(isset($data->tags))$postTags = $data->tags->toArray() @endphp

        @foreach($tags as $tag)
            <option value="{{$tag->id}}"
                    @isset($postTags)
                        @foreach ($postTags as $tagPost)
                            @if(in_array($tag['name'], $tagPost))
                                selected
                         @endif
                        @endforeach
                    @endisset

            >{{$tag->name}}</option>
        @endforeach

    </select>
</div>
<div class="card-content">
    <div class="switch">
        <label>
            Post off
            <input name="active" type="checkbox"@isset($data) @if($data->active == 1) checked @endif @endisset>
            <span class="lever"></span>
            Post On
        </label>
    </div>
</div>
@isset($data)
    <div class="card-content">
         <p>Criado por: {{ $data->user->name }}</p>
    </div>
@endisset

<button class="btn waves-effect waves-light right" style="margin-right: 20px" type="submit" name="action">Atualizar
    <i class="material-icons right">send</i>
</button>