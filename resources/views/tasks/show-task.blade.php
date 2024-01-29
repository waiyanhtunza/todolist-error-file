@foreach ($tasks as $task)
    <div class="flex  w-full">
        <div class=" flex items-center w-1/3  ml-10 my-2">
            <label class="flex items-center h-10 px-2 rounded cursor-pointer hover:bg-gray-900" for="task_10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="white" height="24" viewBox="0 -960 960 960"
                    width="24">
                    <path
                        d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q65 0 123 19t107 53l-58 59q-38-24-81-37.5T480-800q-133 0-226.5 93.5T160-480q0 133 93.5 226.5T480-160q133 0 226.5-93.5T800-480q0-18-2-36t-6-35l65-65q11 32 17 66t6 70q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-56-216L254-466l56-56 114 114 400-401 56 56-456 457Z" />
                </svg>

                <span class="ml-4  text-lg">{{ $task->task }}</span>

            </label>
        </div>

        <div class=" flex items-center justify-center ml-10 w-1/3">
            <p class="text-sm text-gray-600">Create task {{ $task->created_at->diffForHumans() }}</p>
        </div>

        <div class=" flex items-end justify-end w-1/3">
            @include('tasks.action')
        </div>


    </div>
@endforeach
