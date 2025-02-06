<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Messages
        </h2>
    </x-slot>

    <div class="py-12">
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
                <div class="p-6 bg-white border-b border-gray-200">

                    <livewire:manage-messages />
{{--                    <table class="min-w-full divide-y divide-gray-200">--}}
{{--                        <thead class="bg-gray-50">--}}
{{--                            <tr>--}}
{{--                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                    Name--}}
{{--                                </th>--}}
{{--                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                    Email--}}
{{--                                </th>--}}
{{--                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                    Date--}}
{{--                                </th>--}}
{{--                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">--}}
{{--                                    Action--}}
{{--                                </th>--}}
{{--                            </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody class="bg-white divide-y divide-gray-200">--}}
{{--                            @foreach ($messages as $message)--}}
{{--                                <tr>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                        <div class="flex items-center">--}}
{{--                                            <div class="flex-shrink-0 h-10 w-10">--}}
{{--                                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">--}}
{{--                                            </div>--}}
{{--                                            <div class="ml-4">--}}
{{--                                                <div class="text-sm font-medium text-gray-900">--}}
{{--                                                    {{ $message->user->name }}--}}
{{--                                                </div>--}}
{{--                                                <div class="text-sm text-gray-500">--}}
{{--                                                    {{ $message->user->email }}--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap">--}}
{{--                                        <div class="text-sm text-gray-900">--}}
{{--                                            {{ $message->content }}--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">--}}
{{--                                        {{ $message->created_at }}--}}
{{--                                    </td>--}}
{{--                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">--}}
{{--                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">--}}
{{--                                            View--}}
{{--                                        </a>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                            @endforeach--}}
{{--                        </tbody>--}}
{{--                    </table>--}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
