<div>
{{--    @if($updateMode)--}}
{{--        @include('livewire.update')--}}
{{--    @else--}}
{{--        @include('livewire.create')--}}
{{--    @endif--}}
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
        @if (session()->has('message'))
            <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                 role="alert">
                <div class="flex">
                    <div>
                        <p class="text-sm">{{ session('message') }}</p>
                    </div>
                </div>
            </div>
        @endif
        <button wire:click="create()"
                class="px-6 py-2 rounded bg-zinc-400 hover:bg-zinc-500 text-zinc-100">
            Create Group
        </button>
        @if($isOpen)
            @include('livewire.create')
        @endif
    <table class="table table-bordered mt-5">
        <thead>
        <tr>
            <th>Name</th>
            <th>Section</th>
            <th>Year</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @if(isset($groups))
                @foreach($groups as $value)
                    <tr>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->section }}</td>
                        <td>{{ $value->year }}</td>
                        <td>{{ $value->course }}</td>
                        <td>
                            <button wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>
                            <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                @endforeach
            @endif


        </tbody>
    </table>
</div>
