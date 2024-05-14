@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">{{ __('Whoops! Acaba de ocurrir un error.') }}</div>
        <div class="font-medium text-red-600">{{ __('¡Revisa tu información y intenta de nuevo!') }}</div>
    </div>
@endif
