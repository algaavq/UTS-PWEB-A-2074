@extends('layouts.app')

@section('title')
    Homepage
@endsection

@section('content')
    <div class="flex min-h-[90vh] flex-col justify-center px-6 py-12 lg:px-8">
        <div class="w-[60vw] h-[60vh] flex justify-center">
            <table class=" w-[1200px] bg-white rounded-2xl overflow-hidden" border="1" cellspacing="0">
                <thead>
                    <tr class="bg-[#37385b] text-white h-[60px]">
                        <th>Mahasiswa</th>
                        <th>Karyawan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr class="border-2 border-gray-200">
                        <td class="text-center">{{ $contact['nameMHS'] }}</td>
                        <td class="text-center">{{ $contact['nameKRY'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection