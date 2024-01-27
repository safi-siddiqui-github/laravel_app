<div>
    <div class="flex">

        <div class="flex flex-col w-1/2 gap-10 p-5">
            <h2 class="text-xl">
                List Notes
            </h2>

            <div class="flex flex-col gap-2">

                @forelse($notes as $note)
                <div class="flex flex-col shadow p-3 rounded-xl gap-5">

                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-5">
                            <img src="{{asset('storage/icons/face-scan.svg')}}" alt="face-scan" class="object-contain w-16">

                            <div class="flex flex-col gap-1">

                                <div class="flex items-center gap-2">
                                    <img src="{{asset('storage/icons/calender.svg')}}" alt="calender" class="w-5 object-contain">
                                    <p class="text-xs font-medium">{{$note->send_date}}</p>
                                </div>

                                <div class="flex items-center gap-2">
                                    <img src="{{asset('storage/icons/clock.svg')}}" alt="clock" class="w-5 object-contain">
                                    <p class="text-xs font-medium">{{$note->send_time}}</p>
                                </div>

                                <div class="flex items-center gap-2">
                                    <img src="{{asset('storage/icons/mail.svg')}}" alt="mail" class="w-5 object-contain">
                                    <p class="text-xs font-medium">{{$note->recipient}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button class="w-6" wire:click="delete('{{$note->id}}')">
                                <img src="{{asset('storage/icons/delete.svg')}}" alt="delete" class="object-contain">
                            </button>
                            <button class="w-6" wire:click="set_update('{{$note->id}}')">
                                <img src="{{asset('storage/icons/edit.svg')}}" alt="edit" class="object-contain">
                            </button>
                        </div>
                    </div>

                    <hr>

                    <div class="flex flex-col gap-1">
                        <p class="text-xl">{{$note->title}}</p>
                        <p class="text-sm">{{$note->body}}</p>
                    </div>
                </div>
                @empty

                    <div class="border flex justify-center rounded-xl py-5">
                        <p class="text-xl text-slate-400 italic">No Notes. Add some!</p>
                    </div>
                @endforelse

            </div>

        </div>

        <div class="flex flex-col w-1/2 gap-10 p-5">
            <h2 class="text-xl">
                Send Notes
            </h2>

            <div class="flex flex-col gap-2">

                <div class="flex flex-col">
                    <label for="title" class="font-medium">Title</label>
                    <input type="text" wire:model="title" id="title" placeholder="Place a title" class="border rounded w-96 px-3 py-1">
                    @error('title')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="recipient" class="font-medium">Recipient</label>
                    <input type="text" wire:model="recipient" id="recipient" placeholder="recipient@gmail.com" class="border rounded w-96 px-3 py-1">
                    @error('recipient')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="note" class="font-medium">Note</label>
                    <textarea wire:model="body" id="note" cols="30" rows="5" placeholder="My note to ..." class="border rounded w-96 px-3 py-2"></textarea>
                    @error('body')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                <div class="flex flex-col">
                    <label for="send_date" class="font-medium">Date / Time</label>
                    <input type="date" wire:model="send_date" id="send_date" class="border rounded w-96 px-3 py-2">
                    @error('send_date')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                    <input type="time" wire:model="send_time" id="send_time" class="border rounded w-96 px-3 py-2">
                    @error('send_time')
                    <span class="text-red-500 text-sm">{{$message}}</span>
                    @enderror
                </div>

                @if($is_updating)
                <button class="bg-black py-2 text-center rounded w-fit px-5 text-white mt-5" wire:click="update('{{$note->id}}')">
                    <span>Update</span>
                </button>
                @else
                <button class="bg-black py-2 text-center rounded w-fit px-5 text-white mt-5" wire:click="save">
                    <span>Save</span>
                </button>
                @endif

            </div>

        </div>
    </div>
</div>