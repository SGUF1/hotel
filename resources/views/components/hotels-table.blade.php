<div class="w-full">
    <table class="w-full border-collapse border rounded-xl border-blue-400">
        <tr class="bg-blue-200 text-left">
            <th class="px-4 py-2">#</th>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Address</th>
            <th class="px-4 py-2 ">Stars</th>
            <th class="px-4 py-2">Numbers Floor</th>
            <th class="px-4 py-2">Created At</th>
            <th class="px-4 py-2">Updated At</th>
            <th class="px-4 py-2"></th>
        </tr>
        @forelse ($hotels as $key => $hotel)
            <tr class="hover:bg-gray-50 transition-colors h-14 cursor-pointer"
                onclick="window.location='{{ route('hotels.show', $hotel->id) }}';">

                <td class="px-4 py-2">{{ $key + 1 }}</td>
                <td class="px-4 py-2">{{ $hotel->name }} </td>
                <td class="px-4 py-2">{{ $hotel->email }}</td>
                <td class="px-4 py-2">
                    <span>{{ $hotel->address->street_name }}</span>
                    <span>{{ $hotel->address->house_number }}</span>,
                    <span>{{ $hotel->address->city }}</span>
                </td>
                <td class="px-4 py-2">{{ $hotel->stars }} </td>
                <td class="px-4 py-2">{{ $hotel->floor_number }} </td>

                <td class="px-4 py-2">{{ Carbon\Carbon::parse($hotel->created_at)->format('d-m-Y') }}</td>
                <td class="px-4 py-2">{{ Carbon\Carbon::parse($hotel->updated_at)->format('d-m-Y') }}</td>
                <td class=" relative flex items-center justify-center gap-2 ">
                    <div>
                        <a href="{{ route('hotels.edit', $hotel->id) }}"
                            class="px-3 py-2 rounded-xl flex gap-2 border border-transparent hover:border-black transition-colors hover:bg-black hover:text-white">
                            <x-fas-edit class="h-5 w-5" />
                            Edit
                        </a>
                    </div>

                    <form method="POST" action="{{ route('hotels.destroy', $hotel->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class=" py-2 px-3 rounded-xl flex gap-2 text-red-500 transition-colors hover:bg-red-400 hover:text-white">
                            <x-fas-trash class="h-5 w-5" /> Delete
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center p-4">No hotels found.</td>
            </tr>
        @endforelse
    </table>
</div>
