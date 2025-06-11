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
        <div class="mb-4">
            <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 ">{{ __('Title') }}</label>
            <input type="text" id="default-input"
                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" wire:model="title">
        </div>

        <div class="mb-4">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 ">{{ __('Description') }}</label>
            <textarea id="message" rows="4" wire:model="description"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                      ></textarea>
        </div>

        <div class="mb-4">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 ">Priority</label>
            <select id="countries" wire:model="priority"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                <option disabled>Choose a priority</option>
                <option  value="low">Low</option>
                <option  value="medium">Medium</option>
                <option  value="high">High</option>
            </select>
        </div>

        <button type="button"
                wire:click="updateTask"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none ">
            Update
        </button>


    </div>
</div>
