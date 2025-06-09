<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800  leading-tight">
        {{ __('Task Management') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto  p-4 bg-white sm:rounded-lg">
        <div class="mb-3 lg:max-w-3/12">
            <input wire:model.live="search" type="text" id="first_name"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                   placeholder="Search"/>
        </div>
        <div class="relative overflow-x-auto mb-2">
            <table class="w-full text-sm text-center rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Title') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Description') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Priority') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ __('Completed') }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                    <tr class="odd:bg-white  even:bg-gray-50  border-gray-200">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            <a href="{{ route('tasks.show',$task->id) }}">{{ $task->title }}</a>
                        </th>
                        <td class="px-6 py-4">
                            <a href="{{ route('tasks.show',$task->id) }}" class="@if($task->completed) line-through @endif">{{ Str::words($task->description, 5, '...') }}</a>
                        </td>
                        <td class="px-6 py-4">
                            <x-badge priority="{{ $task->priority }}" />
                        </td>
                        <td class="px-6 py-4 text-lg">
                            <div class="flex items-center justify-center">
                                @if($task->completed)
                                    <div class="h-3.5 w-3.5 rounded-full bg-green-500 me-2"></div>
                                @else
                                    <div class="h-3.5 w-3.5 rounded-full bg-red-500 me-2"></div>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            @if(!$task->completed)
                            <a href="#" wire:click="completed({{ $task->id }})" class="font-medium text-green-500  hover:underline">Done</a>
                            |

                            <a href="#" class="font-medium text-blue-600  hover:underline">Edit</a>
                            |@endif
                            <a href="#" wire:click="delete({{ $task->id }})"
                               wire:confirm="Are you sure you want to delete this task?"
                               class="font-medium text-red-600  hover:underline">Remove</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $tasks->links() }}
        </div>
    </div>
</div>
