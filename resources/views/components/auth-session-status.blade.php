@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'rounded-xl shadow-lg bg-green-400 p-5 font-medium text-md text-green-700 mb-4']) }}>
        {{ $status }}
    </div>
@endif
