<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Categories</h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <table>
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td style="border: 1px solid gray; padding: 0.4rem 1rem;">{{ $category->name }}</td>
                            <td style="border: 1px solid gray; padding: 0.4rem 1rem;">
                                <a href="{{ route('categories.edit', $category) }}">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
