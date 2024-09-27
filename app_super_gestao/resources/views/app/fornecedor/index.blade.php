<h3>Fornecedor</h3>

{{ 'Texto de teste' }}
<?= 'Texto de teste' ?>
<br/>
<br/>
{{-- Fica o comentário que será descartado pelo interpretador do blade --}}

@php
  // Para comentar uma linha
  /* 
    Para comentar varias linhas
  */
  //echo 'Texto de teste';

@endphp


{{-- @if (count($fornecedores) > 0 &&count($fornecedores) < 10)
  <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
  <h3>Existem varios fornecedores cadastrados</h3>
@else
  <h3>Aainda não existem fornecedores cadastrados</h3>
@endif --}}


@isset($fornecedores)<!--Testa a existencia da variavel. Age como verificador de parametro e não estoura um erro, se não é passado, ele apenas não faz nada-->
  <!-- foreach($fornecedores as $indice => $fornecedor)
        Fornecedor: $fornecedor['nome']
  -->
  
  @for($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br/>
    Status: {{$fornecedores[$i]['status']}}
    <br/>
    {{-- @isset($fornecedores[1]['cnpj'])
      CNPJ: {{$fornecedores[1]['cnpj']}}
      @empty($fornecedores[1]['cnpj']) <!-- Verifica se a variavel ta vazia -->
        - Vazio
      @endempty
    @endisset --}}

    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'CNPJ não foi informado.' }} {{-- Operador condicional de valor default --}}
    <!-- $variavel testada não estiiver definida (isset)
        ou
        $variavel testada possuir o valor null
    -->
    <br/> 
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) - {{ $fornecedores[$i]['telefone'] ?? '' }}
    @switch($fornecedores[$i]['ddd'])
      @case('11')
        São Paulo - SP
        @break
      @case('73')
        Ilhéus - BA
        @break
      @case('21')
        Rio de Janeiro - RJ
        @break
      @default
        Estado não identificado.
    @endswitch
    <hr/>
    <br/>
  @endfor
@endisset


