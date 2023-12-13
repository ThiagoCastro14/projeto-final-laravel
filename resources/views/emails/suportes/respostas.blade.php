<x-mail::message>
# Dúvida Respondida

subject da dúvida {{ $resposta->suporte_id }} foi respondi com <b>{{ $resposta->content }}</b>.

<x-mail::button :url="route('resposta.index', $resposta->suporte_id)">
Ver
</x-mail::button>

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>