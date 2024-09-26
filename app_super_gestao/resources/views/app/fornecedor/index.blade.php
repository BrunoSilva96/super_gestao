<h3>Fornecedor</h3>

{{ 'Texto de teste' }}
<?= 'Texto de teste' ?>
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


@isset($fornecedores)<!-- Age como verificador de parametro e não estoura um erro, se não é passado, ele apenas não faz nada-->
  Fornecedor: {{ $fornecedores[1]['nome'] }}
  <br/>
  Status: {{$fornecedores[1]['status']}}
  <br/>
  @isset($fornecedores[1]['cnpj'])
    CNPJ: {{$fornecedores[1]['cnpj']}}
    @empty($fornecedores[1]['cnpj'])
      - Vazio
    @endempty
  @endisset
  <br/> 
@endisset