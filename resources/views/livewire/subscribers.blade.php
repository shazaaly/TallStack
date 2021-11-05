{{-- Success is as dangerous as failure. --}}
<div class="p-6 bg-white border-b border-gray-200">
    <p class="text-2xl font-bold text-gray-600 mb-6 underline">Subscribers</p>

    {{--        search start   --}}

    <div class="px-8">

        <x-input type="text" class=" border rounded-lg float-right border-gray-300 mb-4 pl-8 w-1/3" placeholder="Search"
                 wire:model="search" >


        </x-input>

        @if($subscribers ->isEmpty())
            <div class="flex w-full bg-red-100 p-5 rounded-b-lg">
                <p class="text-red-400"> No Subscribers Found</p>

            </div>

        @else
            <table class="w-full">
                <thead class="border-b-2 border-gray-200 text-indigo-300">
                <tr>
                    <th class="px-6 py-3 text-left"> Email</th>
                    <th class="px-6 py-3 text-left"> Verified</th>
                    <th class="px-6 py-3 text-left"> Action</th>
                </tr>
                </thead>

                <tbody>

                @foreach($subscribers as $subscriber)
                    <tr class="text-sm text-indigo-900 border-b border-grey-200">
                        <td class="px-6 py-4">{{$subscriber->email}}</td>
                        <td class="px-6 py-4">{{ optional($subscriber->email_verified_at)->diffForHumans()?? 'Never'}}</td>
                        <td>
                            <x-button class="border border-red-500 text-red-500 bg-red-50 hover:bg-red-100"
                                      wire:click="delete({{ $subscriber->id }})"
                            >Delete
                            </x-button>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        @endif



    </div>




</div>

