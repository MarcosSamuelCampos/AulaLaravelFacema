@extends ('layouts.app');

@section('title','Criar Postagem');

@section('content');

<section class="form-container">

    <h2>Nova Postagem</h2>
    @if($errors->any())

    <div class="alert-error">
        <ul>
            @foreach($errors->all() as $erro)
            <li>{{$erro}}</li>
        </ul>
    </div>

    @endif

    <form action="{{route('postagens.store')}}" method="POST" enctype="multipart/form-data">
        @crsf

        <div class="form-group">
            <label for="titulo">Titulo</label>

            <input type="text"
            name="titulo"
            id="titulo"
            value="{{old('titulo')}}"
            required>
        </div>

         <div class="form-group">
            <label for="autor">Autor</label>
             <input type="text" name='autor' id="autor" value="{{ old('autor')}}"required>
         </div>

         <div class="form-group">
            <label for="texto">texto</label>
             <textarea type="text" name='texto' id="texto" rows = "8" required>{{old('texto')}}</textarea>
         </div>

           <div class="form-group">
            <label for="imagem">imagem</label>
             <input type="file" name='imagem' id="imagem" accept="image/*">
         </div>

          <div class="form-group">
            <label for="ativo">Status</label>
             <select name="ativo" id="ativo">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
             </select>
         </div>

         <button type="submit">Publicar</button>

    </form>

   

</section>

@endsection