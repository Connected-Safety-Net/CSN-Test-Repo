<div>
    <section class="container mx-auto py-8">
        @if(count($users) > 0)
            <table class="table-responsive w-full">
                <thead class="bg-gray-700 text-white">
                <tr>
                    <td class="p-2">Employee ID</td>
                    <td class="p-2">Name</td>
                    <td class="p-2">Email</td>
                    <td class="p-2">Phone</td>
                    <td class="p-2">Date of Birth</td>
                    <td></td>
                </tr>
                </thead>
                @foreach($users as $u)
                    <tr class="border-b">
                        <td class="p-2">{{ $u->employee_id }}</td>
                        <td class="p-2">{{ $u->name }}</td>
                        <td class="p-2">{{ $u->email }}</td>
                        <td class="p-2">{{ $u->phone }}</td>
                        <td class="p-2">{{ \Carbon\Carbon::parse($u->dob)->format("d M Y") }}</td>
                        <td>
                            <x-button href="" class="bg-blue-500 hover:bg-blue-600">Edit</x-button>
                            <x-button href="" class="bg-red-500 hover:bg-red-600">Delete</x-button>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </section>
</div>
