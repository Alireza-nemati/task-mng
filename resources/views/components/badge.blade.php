@props(['priority'])


@php

    $class = '';
    switch ($priority){
        case 'low':
                $class = 'bg-blue-100 text-blue-800';
            break;
            case 'medium':
                $class = 'bg-yellow-100 text-yellow-800';
            break;
            case 'high':
                $class = 'bg-red-100 text-red-800';
            break;
    }

@endphp


<span class="{{ $class }} text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm">{{ ucfirst($priority) }}</span>
