@extends('layouts.guest.app')

@section('content')
<section class="py-8 bg-white border-b">
    <div class="container m-8 mx-auto max-w-8xl">
        <h1 class="w-full my-2 text-3xl font-bold leading-tight text-center text-gray-800">
            Helpdesk Pengguna
        </h1>

        <div class="w-full mb-4">
            <div class="w-64 h-1 py-0 mx-auto my-0 rounded-t opacity-25 gradient">

            </div>
        </div>

        <div class="flex items-center content-center justify-center">
            <a href="{{ route('guest.index') }}">
                <button
                    class="px-4 py-2 font-bold text-white bg-blue-500 border-b-4 border-blue-700 rounded hover:border-blue-500 hover:bg-blue-400">
                    Kembali
                </button>
            </a>
        </div>

        <div class="flex items-center content-center justify-center">
            <div class="pt-4 md:px-8">
                <table class="w-full px-8 border-collapse">
                    <thead>
                        <tr>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Kod Aduan ISD</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Kod Sekolah</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Nama Sekolah</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Model Aset</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                No. Pendaftaran</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                No Siri</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Nama & Emel Pengadu</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                No. Telefon Pengadu</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Status</th>
                            <th
                                class="hidden p-3 font-bold text-gray-600 uppercase bg-gray-200 border border-gray-300 lg:table-cell">
                                Keterangan Aduan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($complaints as $complaint)
                        <tr
                            class="flex flex-row flex-wrap mb-10 bg-white lg:flex-no-wrap lg:mb-0 lg:table-row lg:flex-row lg:hover:bg-gray-100">
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Kod
                                    Aduan ISD</span>
                                {{ $complaint->complaint_isd_code }}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Country</span>
                                {{ $complaint->school->school_code }}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Country</span>
                                {{ $complaint->school->school_name }}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Kod
                                    Aduan ISD</span>
                                {{ $complaint->asset_model }}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Kod
                                    Aduan ISD</span>
                                {{ $complaint->tagging_no }}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Kod
                                    Aduan ISD</span>
                                {{ $complaint->serial_no }}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Kod
                                    Aduan ISD</span>
                                {{ $complaint->complainant_name }}
                                <br>
                                <i>{{ $complaint->complainant_email }}</i>
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b whitespace-nowrap lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Kod
                                    Aduan ISD</span>
                                {{ $complaint->complainant_phone }}
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Status</span>
                                <?php $status = $complaint->status; ?>
                                @switch($status)
                                @case('Selesai')
                                <span class="px-3 py-1 text-xs font-bold bg-green-400 rounded">
                                    {{ $complaint->status }}
                                </span>
                                @break

                                @case('Dalam Proses')
                                <span class="px-3 py-1 text-xs font-bold bg-yellow-400 rounded">
                                    {{ $complaint->status }}
                                </span>
                                @break

                                @case('Baru')
                                <span class="px-3 py-1 text-xs font-bold bg-blue-400 rounded">
                                    {{ $complaint->status }}
                                </span>
                                @break

                                @default
                                <span class="px-3 py-1 text-xs font-bold bg-gray-400 rounded">
                                    N/A
                                </span>
                                @endswitch
                            </td>
                            <td
                                class="relative block w-full p-3 text-center text-gray-800 border border-b lg:static lg:table-cell lg:w-auto">
                                <span
                                    class="absolute top-0 left-0 px-2 py-1 text-xs font-bold uppercase bg-blue-200 lg:hidden">Keterangan
                                    Aduan</span>
                                <br>
                                {{ $complaint->complaint_details }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        <div class="flex flex-col items-center content-center justify-center">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-x-auto">

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<svg class="wave-top" viewBox="0 0 1439 147" version="1.1" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g transform="translate(-1.000000, -14.000000)" fill-rule="nonzero">
            <g class="wave" fill="#f8fafc">
                <path
                    d="M1440,84 C1383.555,64.3 1342.555,51.3 1317,45 C1259.5,30.824 1206.707,25.526 1169,22 C1129.711,18.326 1044.426,18.475 980,22 C954.25,23.409 922.25,26.742 884,32 C845.122,37.787 818.455,42.121 804,45 C776.833,50.41 728.136,61.77 713,65 C660.023,76.309 621.544,87.729 584,94 C517.525,105.104 484.525,106.438 429,108 C379.49,106.484 342.823,104.484 319,102 C278.571,97.783 231.737,88.736 205,84 C154.629,75.076 86.296,57.743 0,32 L0,0 L1440,0 L1440,84 Z">
                </path>
            </g>
            <g transform="translate(1.000000, 15.000000)" fill="#FFFFFF">
                <g transform="translate(719.500000, 68.500000) rotate(-180.000000) translate(-719.500000, -68.500000) ">
                    <path
                        d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496"
                        opacity="0.100000001"></path>
                    <path
                        d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
                        opacity="0.100000001"></path>
                    <path
                        d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z"
                        opacity="0.200000003"></path>
                </g>
            </g>
        </g>
    </g>
</svg>
@endsection