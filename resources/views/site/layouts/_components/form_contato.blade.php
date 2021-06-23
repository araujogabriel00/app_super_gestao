{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" type="nome" value="{{ old('nome') }}" placeholder="Nome" class="borda-preta">

    @if ($errors->has('nome'))
        {{ $errors->first('nome') }}
    @endif

    <br>
    <input name="telefone" type="telefone" value="{{ old('telefone') }}" placeholder="Telefone" class="borda-preta">
    @if ($errors->has('telefone'))
        {{ $errors->first('telefone') }}
    @endif

    <br>
    <input name="email" type="email" value="{{ 'email' }}" placeholder="E-mail" class="borda-preta">

    @if ($errors->has('email'))
        {{ $errors->first('email') }}
    @endif

    <br>

    <select name="motivo_contatos_id" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivo_contatos as $motivo)
            <option value="{{ $motivo->id }}" {{ old('motivo_contatos_id') == $motivo ? 'selected' : '' }}>
                {{ $motivo->motivo_contato }}</option>

        @endforeach
    </select>
    @if ($errors->has('motivo_contatos_id'))
        {{ $errors->first('motivo_contatos_id') }}
    @endif

    <br>
<textarea name="mensagem" class="borda-preta">@if(old('mensagem') != ''){{ old('mensagem') }} @else Preencha aqui a sua mensagem @endif</textarea>

    <br>
    @if ($errors->has('mensagem'))
        {{ $errors->first('mensagem') }}
    @endif
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>
