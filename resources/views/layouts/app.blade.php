    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Sistema Trazabilidad Del Monte</title>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.3.5/sweetalert2.all.min.js"></script>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
        <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cssChequeo.css') }}">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
      <div style="background: white; height: 25px; ">
                <center>
                    <img src="{{asset('imagenes/logo3.png')}}" style="z-index: 1; "  /> 

                </center>
            </div>
            <div style="background: #0B610B; height: 80px; ">
            </div>

            <div class=" mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header" style="height:90%">
                <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
                    <div class="mdl-layout__header-row">
                        <span class="mdl-layout-title">Sistema de Trazabilidad</span>
                        <div class="mdl-layout-spacer"></div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">

                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" id="search">
                                <label class="mdl-textfield__label" for="search">Enter your query...</label>
                            </div>
                        </div>
                        <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
                        <i class="material-icons">more_vert</i>
                        </button>
                        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
                            <li><a class="dropdown-item" href="{{ url('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesion') }} </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form></li>
                        </ul>
                    </div>
                </header>

                <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-700 mdl-color-text--blue-grey-50">
                 

                    <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-700">
                        <a class="mdl-navigation__link" href=" {{ url('/rrr')}} "><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation"></i>Inicio</a>
                        <a class="mdl-navigation__link" href=" {{ url('/fincas')}} "><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation"></i>Fincas</a>
                        <a class="mdl-navigation__link" href="{{ url('/secciones')}}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation"></i>Secciones</a>
                        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation"></i>Reportes</a>
                        <a class="mdl-navigation__link" href="{{ url('/usuarios')}}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation"></i>Usuarios</a>
                        <a class="mdl-navigation__link" href="{{ url('/frutas')}}"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation"></i>Frutas</a>
                        <a class="mdl-navigation__link" href=""><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation"></i>Cerrar Sesión</a>

                    </nav>
                </div>

                <main class="mdl-layout__content mdl-color--grey-100">
                 @yield("content")
                </main>
            </div>
            <div  class ="footer">
                <footer>
                    <p class="footer2">© 2019 Del Monte S.A, Derechos Reservados.</p>
                </footer>
            </div>
            <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
            
            <script>
                var button = document.createElement('button');
                var textNode = document.createTextNode('Click Me!');
                button.appendChild(textNode);
                button.className = 'mdl-button mdl-js-button mdl-js-ripple-effect';
                componentHandler.upgradeElement(button);
                document.getElementById('container').appendChild(button);
            </script>
            <script>
            function confirmar(tipo,id)
            {
                if(confirm('¿Estas seguro de eliminar '+ tipo +' '+ id +' ?'))
                    return true;
                else
                    return false;
            }
            </script>


          
    </html>
