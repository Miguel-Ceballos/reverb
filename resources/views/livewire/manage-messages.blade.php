<div>
    <form class="min-w-full divide-y divide-gray-200" wire:submit="saveMessage">
        <div class="mb-4">
            <x-label for="message" value="Message" />
            <x-textarea wire:model="content" class="w-full mt-2" placeholder="Type your message here..." />
            <x-input-error for="content"/>
        </div>

        <div class="flex justify-end">
            <x-button wire:loading.attr="disabled" class="ml-3">
                Send
            </x-button>
        </div>
    </form>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex items-center justify-between">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-lg font-medium leading-6 text-gray-900">
                            Messages
                        </h2>
                    </div>
                </div>
            </div>
            @foreach ($mensajes as $message)
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex min-w-0 gap-2">
                            <div class="text-sm font-bold text-gray-900">
                                {{ $message->user->name }}
                            </div>
                            -
                            <div class="text-sm text-gray-500">
                                {{ $message->user->email }}
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center justify-between">
                        <div class="text-sm">
                            {{ $message->content }}
                        </div>
                        <div class="text-sm text-gray-500">
                            {{ $message->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
