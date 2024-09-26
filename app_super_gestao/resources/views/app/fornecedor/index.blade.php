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

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br/>
Status: {{$fornecedores[0]['status']}}
<br/>
@if(! ($fornecedores[0]['status'] == 'S'))
  Fornecedor inativo
@endif
<br/>
@unless($fornecedores[0]['status'] == 'S') <!-- Executa se a condição for false -->
  Fornecedor inativo
@endunless