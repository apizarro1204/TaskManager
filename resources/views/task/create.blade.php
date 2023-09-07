<x-layout>
    <div class="flex flex-col h-screen">
        <!-- Header -->

        <!-- Contenido principal centrado -->
        <div class="flex-grow flex justify-center items-center">
            <div class="w-full lg:w-1/2 my-6">
                <div class="text-center">
                    <x-section-header sectionName="Create a Task" />
                </div>

                <div class="text-center pb-6">
                    <p class="text-xl pb-6 flex items-center">
                        <i class="fas fa-clipboard-list mr-3"></i> <a href="{{ route('task.index') }}">All Tasks</a>
                    </p>
                </div>

                <div class="leading-loose">
                    <form class="p-10 bg-white rounded shadow-xl border-2 border-purple-500" method="post" action="{{ route('task.store') }}">
                        @csrf
                        <x-form.input inputName="title" class="rounded-full px-4 py-2 border-2 border-purple-300 focus:outline-none focus:border-purple-500" placeholder="Title" />
                        <div class="mt-4">
                            <label class="block text-sm text-gray-600" for="description">Task Details</label>
                            <textarea class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none" id="description" name="description" rows="4" placeholder="Task Details...." required></textarea>
                            <x-form.error inputName="description" />
                        </div>
                        <x-form.input inputName="due" type="date" name="minDate" min="2022-01-01" class="mt-4 rounded-full px-4 py-2 border-2 border-purple-300 focus:outline-none focus:border-purple-500" />
                        <div class="mt-4">
                            <label class="block text-sm text-gray-600" for="user">Assign to</label>
                            <select name="assigneduser_id" id="assigneduser_id" class="w-full px-4 py-2 text-gray-700 bg-gray-200 rounded focus:outline-none focus:bg-white">
                                @if ($users->count())
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                        @auth
                        <x-form.button buttonName="Create" class="mt-6 bg-purple-500 hover:bg-purple-600 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline-purple active:bg-purple-700" />
                        @else
                        <p class="font-bold mt-6 text-purple-500"><a href="/login" class="underline">Sign in</a> to create a Task</p>
                        @endauth
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
