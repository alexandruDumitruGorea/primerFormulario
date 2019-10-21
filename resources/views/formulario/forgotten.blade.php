@extends('base')
@section('contenido')

    <form class="form" action="{{ url('forgottenPassword/') }}" method="POST">
        @csrf
      <div class="form__image">
          <svg id="user" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 196 196">
            <defs>
              <style>.cls-1{fill:#2196F3;}.cls-2{fill:#fff;}</style>
            </defs>
            <title>user-icon</title>
            <circle id="circulo" class="cls-1" cx="98" cy="98" r="98"/>
            <path id="usuario" class="cls-2" d="M154.4,134.7c-2.2-3.3-10-4.4-20-8.9s-12.2-10-12.2-10v-5.5s0-2.2,3.4-6.7,3.3-7.8,3.3-7.8c4.4-2.2,6.7-8.9,6.7-8.9s2.2-5.5,0-13.3c-2.3-1.1,1.1-21.1-6.7-32.2S100,29.2,100,29.2,79.1,30,71.1,41.4s-4.4,31.1-6.7,32.2c-2.2,7.8,0,13.3,0,13.3s2.3,6.7,6.7,8.9c0,0,0,3.4,3.3,7.8s3.4,6.7,3.4,6.7v5.5s-2.2,5.6-12.2,10-17.8,5.6-20,8.9a21.8,21.8,0,0,0-3.4,8.9s18.9,26.7,57.8,26.7,57.8-26.7,57.8-26.7A21.8,21.8,0,0,0,154.4,134.7Z" transform="translate(-2 -1.7)"/>
          </svg>
      </div>
      <div class="form__container">
        <input class="form__input" type="email" name="email" placeholder=" " id="input-email" pattern="[0-9a-zAZÑñ._@-]{10,50}" maxlength="50"/>
        <label class="form__label" form="input-email">Correo electrónico</label>
        <div class="form__focus-animation"></div>
        <p class="form__error">Correo electrónico no válido</p>
      </div>
        <input class="form__button" type="submit" value="Recuperar contraseña"/>
    </form>

@stop