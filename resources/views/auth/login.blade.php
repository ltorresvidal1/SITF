@extends('layouts.plantillaLogin')
@section('title','SITF')


   
@section('content')
    <div class="login">

       
        <div class="col-lg-6">
          

             <div class="login-content">
            <form  action="{{route('login.store')}}" method="POST">
                @csrf
                <h1 class="text-center">Bienvenidos</h1>
                <div class="text-muted text-center mb-4">
                    Hola inicia sesión, hay muchas cosas nuevas esperándote.
                </div>
                <div class="mb-3">

                    @if(session('mensaje'))
                    <p style="color:red">{{session('mensaje')}}</p>
                    @endif

                    <label class="form-label">Usuario</label>
                    <input id='usuario' name='usuario' type="text" class="form-control form-control-lg fs-15px  @error('usuario') is-invalid @enderror"  value="{{old('usuario')}}" placeholder="Ingrese su usuario" />
                    @error('usuario')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                <div class="mb-3">
                    <div class="d-flex">
                        <label class="form-label">Contraseña</label>
                    </div>
                    <input id='password' name='password'  type="password" class="form-control form-control-lg fs-15px @error('password') is-invalid @enderror"  value="{{old('password')}}"  placeholder="Ingrese su contraseña" />
                    @error('password')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg d-block w-100 fw-500 mb-3">Entrar</button>
                
            </form>
        </div>

        </div>
       


    </div>
@endsection
