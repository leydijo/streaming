@extends('layout')

@section('content')

<section class="box container">
    <div class="formulario">
        <form action="{{route('save')}}" method="post">
             @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error}}</p><br>
            @endforeach
            @if (session('success')) 
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name"  placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Corrreo</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Edad</label>
                <input type="number" class="form-control" name="edad" placeholder="edad">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">¿Con qué frecuencia ves programas de televisión?</label><br>
                @foreach($frequencys as $frequency)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  name="frequency" value="{{$frequency->name}}">
                        <label class="form-check-label" for="inlineCheckbox1">{{$frequency->name}}</label>
                    </div>
                @endforeach
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">¿Cuál es tu tipo de programa de streaming favorito?</label><br>
                @foreach($platforms as $program)
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox"  name="program" value="{{$program->nombre}}">
                        <label class="form-check-label"  for="inlineCheckbox1">{{$program->nombre}}</label>
                    </div>
                @endforeach
            </div>
        
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">¿Cuál es tu tipo de programa de televisión favorito?</label><br>
                    @foreach($type_programan as $program)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tipo_programa" value="{{$program->tipo_programa}}">
                            <label class="form-check-label" for="flexRadioDefault1">
                            {{$program->tipo_programa}}
                            </label>
                        </div>
                    @endforeach
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1"   class="form-label">De todas/os las películas que has visto en los últimos 12 meses, ¿cuál es tu más favorito?</label>
                <textarea class="form-control" name="movie_favorite" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1"   class="form-label">¿En qué programa de televisión te gustaría más ser miembro del elenco?</label>
                <textarea class="form-control"  name="program_favorite" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            
            <button type="submit" class="enviar btn btn-warning">Enviar</button>
        </form>
    </div>

</section>

@endsection