<!DOCTYPE html>
<html lang="es">
  
        @include('layouts.partial.head')
   
<body>
         <div id="app" class="app {{ (!empty($appClass)) ? $appClass : '' }}">
         @include('layouts.partial.header')
         @includeWhen(empty($sidebarHide), 'layouts.partial.sidebar')
         @include('layouts.partial.formulario')
         @include('layouts.partial.footer')
         @include('layouts.partial.scripts')
              
</body>
</html>