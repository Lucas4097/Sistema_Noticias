@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-light p-3 bg-success']) }}>
        {{ $status }}
    </div>
@endif
