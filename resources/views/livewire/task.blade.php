<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800  leading-tight">
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="inline text-5xl bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                      d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
            </svg>
            {{ __('Back') }}</a>
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-6xl mx-auto p-4 bg-white sm:rounded-lg">
        <h2 class="font-bold">{{ $task->title }}</h2>
        <hr class="mb-2">
        <x-badge priority="{{ $task->priority }}" />
        @if($task->completed)
        <span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm">Completed</span>
        @endif
        <p class="mt-2 mb-5">
            {{ $task->description }}
        </p>

        @if(!$task->completed)
            <button type="button" wire:click="completed"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none ">
                Done
            </button>
        @endif

        <button type="button" wire:click="delete"
                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">
            Delete
        </button>

    </div>
</div>
