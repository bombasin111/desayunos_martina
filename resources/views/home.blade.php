@extends('layouts.app')

@section('title', 'Bienvenido Papuuu!!!')

@section('content')
    <h1 class="text-white mb-4">💖 ¡Bienvenido a Martina! 💖</h1>

    <div class="d-flex justify-content-center flex-wrap">
        <a href="/desayunos" class="btn btn-success m-2 px-4 py-2">
            Desayunos 🍽️
        </a>
        <a href="/detalles" class="btn btn-success m-2 px-4 py-2">
            Detalles 🎁
        </a>
    </div>
<script>
document.addEventListener('keydown', function(e) {
    if (e.ctrlKey && e.shiftKey && e.key === 'A') {
        window.location.href = "{{ route('admin.login') }}";
    }
});
</script>
@endsection
