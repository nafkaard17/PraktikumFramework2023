<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Mahasiswa') }}
        </h2>
    </x-slot>

    <div class="pt-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{route('add')}}">
                        <x-primary-button>
                            {{ __('Mahasiswa') }}
                        </x-primary-button>
                    </a>
                    <div class="relative flex flex-col min-w-0 break-words w-full shadow-xl rounded bg-gray-500 text-dark">
                        <div class="rounded-t mb-0 px-4 py-3 border-0">
                            <div class="flex flex-wrap items-center">
                                <div class="relative w-full max-w-full text-gray-300 flex-grow flex-1">
                                    <h3 class="font-semibold text-lg">
                                        Tabel Mahasiswa
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="block w-full overflow-x-auto">
                            <!-- Projects table -->
                            <table class="items-center w-full bg-transparent border-collapse">
                                <thead>
                                <tr>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        NIM
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        Nama
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        Umur
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        Jenis Kelamin
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        Alamat
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        Kota
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        Jurusan
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        Fakultas
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-left bg-gray-800 text-gray-300 border-gray-400">
                                        Kelas
                                    </th>
                                    <th class="px-6 align-middle border border-solid py-3 text-md border-l-0 border-r-0 whitespace-nowrap font-bold text-center bg-gray-800 text-gray-300 border-gray-400">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->nim }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->nama }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->umur }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->jenis_kelamin }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->alamat }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->kota }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->jurusan }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->fakultas }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            {{ $student->kelas }}
                                        </td>
                                        <td class="flex justify-evenly border-t-0 px-6 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            <x-secondary-button>
                                                <a href="{{route('edit', $student->nim)}}" class="btn btn-warning">Edit</a>
                                            </x-secondary-button>
                                            <form action="{{route('student.delete', $student->nim)}}" method="post">
                                                @csrf
                                                <x-danger-button>
                                                    {{ __('Delete') }}
                                                </x-danger-button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>





