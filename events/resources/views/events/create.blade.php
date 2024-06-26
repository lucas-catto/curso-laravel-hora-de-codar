
@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">

    <h1>Crie seu Evento</h1>

    <form action="/events" method="post" enctype="multipart/form-data">

        @csrf
                
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Nome do Evento">
        </div>

        <div class="form-group">
            <label for="title">Data do Evento:</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="city">Cidade</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="Local do Evento">
        </div>        
        
        <div class="form-group">
            <label for="private">O Evento é privado?</label>

            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea type="text" name="description" id="description" class="form-control" placeholder="O que vai acontecer no Evento?"></textarea>
        </div>

        <div class="form-group">
            <label for="">Adicione itens de Infraestrutura</label>
            
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Bebida"> Bebida
            </div>

            <div class="form-group">
                <input type="checkbox" name="items[]" value="Comida"> Comida
            </div>
            
        </div>

        <input type="submit" value="Criar Evento" class="btn btn-primary">
    </form>
</div>

@endsection
