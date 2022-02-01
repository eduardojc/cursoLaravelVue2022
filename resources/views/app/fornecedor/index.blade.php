<h3>Fornecedor</h3>

{{-- FICA O COMENTARIO DESCARTADO --}}

{{ 'Cadastro de Fornecedores' }}
<br>
<hr>
{{-- @isset($fornecedores)    
    @for($i=0; $i<count($fornecedores); $i++)
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        TELEFONE: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza - CE
                @break
            @default
                Estado não identificado
        @endswitch
        <hr>
        <br>
    @endfor
@endisset --}}

{{-- @php $i=0; @endphp
@while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br>
        Status: {{ $fornecedores[$i]['status'] }}
        <br>
        CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        TELEFONE: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] ?? '' }}
        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza - CE
                @break
            @default
                Estado não identificado
        @endswitch
        <hr>
        <br>
        @php $i++; @endphp
@endwhile --}}

{{-- 
@isset($fornecedores)    
    @foreach($fornecedores as $key => $fornecedor)
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        TELEFONE: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza - CE
                @break
            @default
                Estado não identificado
        @endswitch
        <hr>
        <br>
    @endforeach
@endisset --}}


@isset($fornecedores)    
    @forelse($fornecedores as $key => $fornecedor)
        {{-- @dd($loop) --}}
        @if($loop->first)
            Primeira iteração do loop
        @elseif($loop->last)
            Ultima iteração do loop
        @endif
        <br>
        Iteração Atual: {{ $loop->iteration }}
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        TELEFONE: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        @switch($fornecedor['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza - CE
                @break
            @default
                Estado não identificado
        @endswitch
        <br>
        <br>
        Total de Registros: {{ $loop->count }}
        <hr>
        <br>
        @empty
        Não Existem fornecedores Cadastrados
    @endforelse
@endisset