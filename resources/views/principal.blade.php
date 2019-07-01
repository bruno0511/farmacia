@include('cabecalho')



<div style="background-color:lightblue" class="container">
    <div class="row">
      <div class="col-2">
        <br>
        Loja 1001<br>
        Loja 1002<br>
        Loja 1003<br>
        Loja 1004<br>
      </div>
    <div style="background-color:blue" class="col-8">
        {{--Bloco com conteudo pincipal--}}
        @yield('conteudo-principal')
    </div>
        <div style="background-color:lightblue" class="col-2">
             <br>
             Generio<br>
             Medic RX<br>
             Similar<br>
             OTC<br>
        </div>
    </div>

</div>
