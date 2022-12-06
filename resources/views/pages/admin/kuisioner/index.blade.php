@extends('layouts.app')
@section('title','Kuisioner')
@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <h3>Kuisioner</h3>
</div>
<div class="page-content">
    <section class="row" style="min-height: 80vh;">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h3>Kuisioner Tracer Study</h3>
                </div>
                <div class="card-body">
                    {{-- kuisioner --}}
                    <form action="{{ route('kuisioner.store') }}" method="POST">
                        @csrf
                        <div class="block w-full overflow-x-auto p-2">
                            <div class="px-4">
                                <p class="font-poppins font-semibold text-[1.25rem] text-[#515152]">
                                    Identitas
                                </p>
                                <div class="mb-4">
                                    <div class="grid grid-cols-6 gap-6 mt-4">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="npm" class="block text-sm font-medium text-gray-700">NIM
                                                (nimhsmsmh)</label>
                                            <input type="text" name="npm" id="npm" readonly
                                                value="{{ $mahasiswa->npm }}"
                                                class="bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="kode_pt" class="block text-sm font-medium text-gray-700">Kode PT
                                                (kdptimsmh)</label>
                                            <input type="text" name="kode_pt" id="kode_pt" readonly
                                                value="{{ $mahasiswa->kode_pt }}"
                                                class="bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6 mt-4">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="tahun_lulus"
                                                class="block text-sm font-medium text-gray-700">Tahun
                                                Lulus (tahun_lulus)</label>
                                            <input type="text" name="tahun_lulus" id="tahun_lulus" readonly
                                                value="{{ $mahasiswa->tahun_lulus }}"
                                                class="bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="kode_prodi" class="block text-sm font-medium text-gray-700">Kode
                                                Prodi (kdpstmsmh)</label>
                                            <input type="text" name="kode_prodi" id="kode_prodi" readonly
                                                value="{{ $mahasiswa->kode_prodi }}"
                                                class="bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6 mt-4">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="nama_mahasiswa"
                                                class="block text-sm font-medium text-gray-700">Nama
                                                (nmmhsmsmh)</label>
                                            <input type="text" name="nama_mahasiswa" id="nama_mahasiswa" readonly
                                                value="{{ $mahasiswa->nama_mahasiswa }}"
                                                class="bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="no_hp" class="block text-sm font-medium text-gray-700">Nomor
                                                Telepon/HP
                                                (telpomsmh)</label>
                                            <input type="text" name="no_hp" id="no_hp" readonly
                                                value="{{ $mahasiswa->no_hp }}"
                                                class="bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6 mt-4">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="email" class="block text-sm font-medium text-gray-700">Alamat
                                                Email
                                                (emailmsmh)</label>
                                            <input type="text" name="email" id="email" readonly
                                                value="{{ $mahasiswa->email }}"
                                                class="bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="nik" class="block text-sm font-medium text-gray-700">NIK
                                                (nik)</label>
                                            <input type="text" name="nik" id="nik" readonly
                                                value="{{ $mahasiswa->nik }}"
                                                class="bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-6 gap-6 mt-4">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="npwp" class="block text-sm font-medium text-gray-700">NPWP
                                                (npwp)</label>
                                            <input type="text" name="npwp" id="npwp" value="{{ $mahasiswa->npwp }}"
                                                class="disabled:bg-gray-200 mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                    </div>
                                </div>
                                <p class="font-poppins font-semibold text-[1.25rem] text-[#515152">
                                    Kuesioner Wajib
                                </p>
                                <div class="ml-4 mt-[1.188rem]">
                                    <ol class="list-decimal">
                                        <li class="mb-4">
                                            Jelaskan status Anda saat ini? * (f8)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex items-center">
                                                <input id="1_status" name="f8" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="1" />
                                                <label for="1_status"
                                                    class="ml-3 block text-sm font-medium text-gray-700">
                                                    Bekerja (full
                                                    time
                                                    / part time) (1)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="2_status" name="f8" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="2" />
                                                <label for="2_status"
                                                    class="ml-3 block text-sm font-medium text-gray-700">
                                                    Belum
                                                    memungkinkan
                                                    bekerja (2)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="3_status" name="f8" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="3" />
                                                <label for="3_status"
                                                    class="ml-3 block text-sm font-medium text-gray-700">
                                                    Wiraswasta
                                                    (3)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="4_status" name="f8" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="4" />
                                                <label for="4_status"
                                                    class="ml-3 block text-sm font-medium text-gray-700">
                                                    Melanjutkan
                                                    Pendidikan (4)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="5_status" name="f8" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="5" />
                                                <label for="5_status"
                                                    class="ml-3 block text-sm font-medium text-gray-700">
                                                    Tidak kerja
                                                    tetapi
                                                    sedang mencari kerja
                                                    (5)
                                                </label>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Apakah Anda telah mendapatkan pekerjaan &lt;= 6 bulan
                                            / termasuk bekerja sebelum lulus? (f504)
                                        </li>
                                        <div class="mb-4">
                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <div class="flex items-center">
                                                    <input id="pekerjaan-ya" name="f504" type="radio"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                        value="1" />
                                                    <label for="pekerjaan-ya"
                                                        class="ml-3 block text-sm font-medium text-gray-700">
                                                        Ya
                                                        (1)
                                                    </label>
                                                </div>
                                                <div class="flex items-center">
                                                    <input id="pekerjaan-tidak" name="f504" type="radio"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                        value="0" />
                                                    <label for="pekerjaan-tidak"
                                                        class="ml-3 block text-sm font-medium text-gray-700">
                                                        Tidak
                                                        (2)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-6 gap-6 mt-4">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="getJob"
                                                        class="block text-sm font-medium text-gray-700">Dalam berapa
                                                        bulan
                                                        Anda mendapatkan pekerjaan?
                                                        (f502)
                                                    </label>
                                                    <input type="number" name="f502" id="getJob"
                                                        class="mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="f505"
                                                        class="block text-sm font-medium text-gray-700">Berapa rata-rata
                                                        pendapatan Anda per bulan?
                                                        (take home pay)? (f505)
                                                    </label>
                                                    <input type="number" name="f505" id="f505"
                                                        class="mt-1 py-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                </div>
                                            </div>
                                        </div>
                                        <li class="mb-4">Dimana lokasi tempat Anda bekerja?</li>
                                        <div class="mb-4">
                                            <div class="grid grid-cols-6 gap-6 mt-4">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="f5a1"
                                                        class="block text-sm font-medium text-gray-700">Provinsi
                                                        (f5a1)
                                                    </label>
                                                    <select id="f5a1" name="f5a1" data-token="{{ csrf_token() }}"
                                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                        <option>Silahkan Pilih</option>
                                                        @forelse ($wilayah as $item)
                                                        <option value="{{ $item->nama }}|{{ $item->kode }}">{{
                                                            $item->nama }}</option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <div>
                                                        <label for="f5a2"
                                                            class="block text-sm font-medium text-gray-700">Kota/Kabupaten
                                                            (f5a2)
                                                        </label>
                                                        <select id="f5a2" name="f5a2"
                                                            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Apa jenis perusahaan/intansi/institusi tempat anda
                                            bekerja sekarang? (f1101)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex items-center">
                                                <input id="1_typeCompany" name="f1101" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="1" />
                                                <label for="1_typeCompany"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Intansi
                                                    pemerintah
                                                    (1)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="6_typeCompany" name="f1101" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="6" />
                                                <label for="6_typeCompany"
                                                    class="ml-3 block text-sm font-medium text-gray-700">BUMN/BUMD
                                                    (6)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="7_typeCompany" name="f1101" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="7" />
                                                <label for="7_typeCompany"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Institusi/Organisasi
                                                    Multilateral (7)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="2_typeCompany" name="f1101" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="2" />
                                                <label for="2_typeCompany"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Organisasi
                                                    non-profit/Lembaga Swadaya Masyarakat
                                                    (2)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="3_typeCompany" name="f1101" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="3" />
                                                <label for="3_typeCompany"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Perusahaan
                                                    swasta
                                                    (3)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="4_typeCompany" name="f1101" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="4" />
                                                <label for="4_typeCompany"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Wiraswasta/perusahaan
                                                    sendiri (4)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="5_typeCompany" name="f1101" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="5" />
                                                <label for="5_typeCompany"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Lainnya,
                                                    tuliskan
                                                    (5)
                                                </label>
                                            </div>
                                            <input type="text" name="f1102" id="f1102" placeholder="f1101"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <li class="mb-4">
                                            Apa nama perusahaan/kantor tempat Anda bekerja? (f5b)
                                        </li>
                                        <div class="mb-4">
                                            <div class="grid grid-cols-6 gap-6 mt-4">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <input type="text" name="f5b" id="f5b"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                </div>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Bila berwiraswasta, apa posisi/jabatan Anda saat ini?
                                            (Apabila 1 Menjawab [3] wiraswasta) (f5c)
                                        </li>
                                        <div class="mb-4">
                                            <div class="grid grid-cols-6 gap-6 mt-4">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <select id="f5c" name="f5c"
                                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                        <option>Silahkan Pilih</option>
                                                        <option value="1">Founder (1)</option>
                                                        <option value="2">Co-Founder (2)</option>
                                                        <option value="3">Staff (3)</option>
                                                        <option value="4">Freelance/Kerja Lepas (4)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Apa tingkat tempat kerja Anda? (f5d)
                                        </li>
                                        <div class="mb-4">
                                            <div class="grid grid-cols-6 gap-6 mt-4">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <select id="f5d" name="f5d"
                                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                        <option>Silahkan Pilih</option>
                                                        <option value="1">
                                                            Lokal/Wilayah/Wiraswasta tidak berbadan hukum
                                                            (1)
                                                        </option>
                                                        <option value="2">
                                                            Nasional/Wiraswasta berbadan hukum (2)
                                                        </option>
                                                        <option value="3">
                                                            Multinasional/Internasional (3)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <li class="mb-4">Pertanyaan studi lanjut</li>
                                        <div class="mb-4">
                                            <div class="grid grid-cols-6 gap-6 mt-4">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="f18a"
                                                        class="block text-sm font-medium text-gray-700">Sumber biaya
                                                        (f18a)
                                                    </label>
                                                    <select id="f18a" name="f18a"
                                                        class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                                                        <option>Silahkan Pilih</option>
                                                        <option value="1">Biaya Sendiri (1)</option>
                                                        <option value="2">Beasiswa (2)</option>
                                                    </select>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <div>
                                                        <label for="f18b"
                                                            class="block text-sm font-medium text-gray-700">Perguruan
                                                            Tinggi
                                                            (f18b)
                                                        </label>
                                                        <input type="text" name="f18b" id="f18b" readonly
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-6 gap-6 mt-4">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <div>
                                                        <label for="nim"
                                                            class="block text-sm font-medium text-gray-700">Program
                                                            Studi
                                                            (f18c)
                                                        </label>
                                                        <input type="text" readonly
                                                            placeholder="Silahkan pilih perguruan tinggi terlebih dahulu"
                                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                    </div>
                                                </div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="f18d"
                                                        class="block text-sm font-medium text-gray-700">Tanggal Masuk
                                                        (f18d)
                                                    </label>
                                                    <input type="date" name="f18d" id="f18d"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                </div>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Sebutkan sumberdana dalam pembiayaan kuliah? * (bukan
                                            ketika Studi Lanjut) (f1201)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex items-center">
                                                <input id="1_sumberDana" name="f1201" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="1" />
                                                <label for="1_sumberDana"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Biaya
                                                    Sendiri/Keluarga (1)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="2_sumberDana" name="f1201" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="2" />
                                                <label for="2_sumberDana"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Beasiswa ADIK
                                                    (2)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="3_sumberDana" name="f1201" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="3" />
                                                <label for="3_sumberDana"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Beasiswa
                                                    BIDIKMISI
                                                    (3)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="4_sumberDana" name="f1201" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="4" />
                                                <label for="4_sumberDana"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Beasiswa PPA
                                                    (4)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="5_sumberDana" name="f1201" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="5" />
                                                <label for="5_sumberDana"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Beasiswa
                                                    AFIRMASI
                                                    (5)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="6_sumberDana" name="f1201" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="6" />
                                                <label for="6_sumberDana"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Beasiswa
                                                    Perusahaan/Swasta (6)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="7_sumberDana" name="f1201" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="7" />
                                                <label for="7_sumberDana"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Lainnya,
                                                    tuliskan
                                                    (7)
                                                </label>
                                            </div>
                                            <input type="text" name="f1202" id="f1202" placeholder="f1202"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <li class="mb-4">
                                            Seberapa erat hubungan bidang studi dengan pekerjaan
                                            Anda? * (f14)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex items-center">
                                                <input id="1_hubunganBidangStudi" name="f14" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="1" />
                                                <label for="1_hubunganBidangStudi"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Sangat Erat
                                                    (1)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="2_hubunganBidangStudi" name="f14" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="2" />
                                                <label for="2_hubunganBidangStudi"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Erat
                                                    (2)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="3_hubunganBidangStudi" name="f14" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="3" />
                                                <label for="3_hubunganBidangStudi"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Cukup Erat
                                                    (3)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="4_hubunganBidangStudi" name="f14" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="4" />
                                                <label for="4_hubunganBidangStudi"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Kurang Erat
                                                    (4)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="5_hubunganBidangStudi" name="f14" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="5" />
                                                <label for="5_hubunganBidangStudi"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Tidak Sama
                                                    Sekali
                                                    (5)
                                                </label>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Tingkat pendidikan apa yang paling tepat/sesuai untuk
                                            pekerjaan anda saat ini? * (f15)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex items-center">
                                                <input id="1_kesesuaianTingkatPendidikan" name="f15" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="1" />
                                                <label for="1_kesesuaianTingkatPendidikan"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Setingkat Lebih
                                                    Tinggi (1)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="2_kesesuaianTingkatPendidikan" name="f15" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="2" />
                                                <label for="2_kesesuaianTingkatPendidikan"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Tingkat yang
                                                    Sama
                                                    (2)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="3_kesesuaianTingkatPendidikan" name="f15" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="3" />
                                                <label for="3_kesesuaianTingkatPendidikan"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Setingkat Lebih
                                                    Rendah (3)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="4_kesesuaianTingkatPendidikan" name="f15" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="4" />
                                                <label for="4_kesesuaianTingkatPendidikan"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Tidak Perlu
                                                    Pendidikan Tinggi (4)
                                                </label>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Pada saat lulus, pada tingkat mana kompetensi di bawah
                                            ini anda : kuasai? (A) Pada saat ini, pada tingkat
                                            mana kompetensi di bawah ini diperlukan dalam
                                            pekerjaan? (B) *
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                                                <table class="divide-y divide-gray-300">
                                                    <tr>
                                                        <td colspan="6" class="px-0.5 lg:px-3 py-3.5">
                                                            A
                                                        </td>
                                                        <td colspan="6" class="px-0.5 lg:py-3.5">B</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" class="px-0.5 lg:px-2 py-3.5">
                                                            Sangat Rendah
                                                        </td>
                                                        <td colspan="3" class="px-0.5 lg:px-2 py-3.5">
                                                            Sangat Tinggi
                                                        </td>
                                                        <td colspan="3" class="px-0.5 lg:px-2 py-3.5">
                                                            Sangat Rendah
                                                        </td>
                                                        <td colspan="3" class="px-0.5 lg:px-2 py-3.5">
                                                            Sangat Tinggi
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-[0.2rem] lg:px-5 py-3.5">1</td>
                                                        <td class="px-[0.2rem] lg:px-5 py-3.5">2</td>
                                                        <td class="px-[0.2rem] lg:px-5 py-3.5">3</td>
                                                        <td class="px-[0.2rem] lg:px-5 py-3.5">4</td>
                                                        <td class="px-[0.2rem] lg:px-5 py-3.5">5</td>
                                                        <td></td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">1</td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">2</td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">3</td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">4</td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">5</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_etika" name="f1761" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_etika" name="f1761" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_etika" name="f1761" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_etika" name="f1761" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_etika" name="f1761" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                        <td
                                                            class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">
                                                            (f1761) Etika (f1762)
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_etika2" name="f1762" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_etika2" name="f1762" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_etika2" name="f1762" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_etika2" name="f1762" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_etika2" name="f1762" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_bidangIlmu" name="f1763" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_bidangIlmu" name="f1763" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_bidangIlmu" name="f1763" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_bidangIlmu" name="f1763" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_bidangIlmu" name="f1763" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                        <td
                                                            class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">
                                                            (f1763) Keahlian berdasarkan bidang ilmu
                                                            (f1764)
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_bidangIlmu2" name="f1764" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_bidangIlmu2" name="f1764" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_bidangIlmu2" name="f1764" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_bidangIlmu2" name="f1764" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_bidangIlmu2" name="f1764" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_bahasaInggris" name="f1765" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_bahasaInggris" name="f1765" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_bahasaInggris" name="f1765" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_bahasaInggris" name="f1765" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_bahasaInggris" name="f1765" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                        <td
                                                            class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">
                                                            (f1765) Bahasa Inggris (f1766)
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_bahasaInggris2" name="f1766" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_bahasaInggris2" name="f1766" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_bahasaInggris2" name="f1766" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_bahasaInggris2" name="f1766" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_bahasaInggris2" name="f1766" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_teknologiInformasi" name="f1767" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_teknologiInformasi" name="f1767" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_teknologiInformasi" name="f1767" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_teknologiInformasi" name="f1767" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_teknologiInformasi" name="f1767" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                        <td
                                                            class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">
                                                            (f1767) Penggunaan Teknologi Informasi (f1768)
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_teknologiInformasi2" name="f1768" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_teknologiInformasi2" name="f1768" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_teknologiInformasi2" name="f1768" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_teknologiInformasi2" name="f1768" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_teknologiInformasi2" name="f1768" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_komunikasi" name="f1769" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_komunikasi" name="f1769" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_komunikasi" name="f1769" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_komunikasi" name="f1769" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_komunikasi" name="f1769" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                        <td
                                                            class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">
                                                            (f1769) Komunikasi (f1770)
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_komunikasi2" name="f1770" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_komunikasi2" name="f1770" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_komunikasi2" name="f1770" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_komunikasi2" name="f1770" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_komunikasi2" name="f1770" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_teamWork" name="f1771" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_teamWork" name="f1771" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_teamWork" name="f1771" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_teamWork" name="f1771" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_teamWork" name="f1771" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                        <td
                                                            class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">
                                                            (f1771) Kerja sama tim (f1772)
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_teamWork2" name="f1772" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_teamWork2" name="f1772" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_teamWork2" name="f1772" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_teamWork2" name="f1772" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_teamWork2" name="f1772" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_pengembangan" name="f1773" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_pengembangan" name="f1773" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_pengembangan" name="f1773" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_pengembangan" name="f1773" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_pengembangan" name="f1773" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                        <td
                                                            class="px-[0.2rem] lg:px-3 py-3.5 text-[0.7rem] lg:text-[1rem] text-center">
                                                            (f1773) Pengembangan (f1774)
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="0_pengembangan2" name="f1774" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="1" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="1_pengembangan2" name="f1774" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="2" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="2_pengembangan2" name="f1774" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="3" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="3_pengembangan2" name="f1774" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="4" />
                                                        </td>
                                                        <td class="px-[0.2rem] lg:px-3 py-3.5">
                                                            <input id="4_pengembangan2" name="f1774" type="radio"
                                                                class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                                value="5" />
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Menurut anda seberapa besar penekanan pada metode
                                            pembelajaran dibawah ini dilaksanakan di program studi
                                            anda?
                                        </li>
                                        <div class="grid grid-cols-2 lg:grid-cols-3 gap-y-4">
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Perkuliahan
                                                    (f21)</label>
                                                <div class="space-y-4 mb-4">
                                                    <div class="flex items-center">
                                                        <input id="1_perkuliahan" name="f21" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="1" />
                                                        <label for="1_perkuliahan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Sangat
                                                            Besar (1)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="2_perkuliahan" name="f21" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="2" />
                                                        <label for="2_perkuliahan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Besar
                                                            (2)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="3_perkuliahan" name="f21" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="3" />
                                                        <label for="3_perkuliahan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Cukup
                                                            Besar
                                                            (3)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="4_perkuliahan" name="f21" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="4" />
                                                        <label for="4_perkuliahan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Kurang
                                                            Besar (4)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="5_perkuliahan" name="f21" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="5" />
                                                        <label for="5_perkuliahan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Tidak
                                                            Sama
                                                            Sekali (5)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Demonstrasi
                                                    (f22)</label>
                                                <div class="space-y-4 mb-4">
                                                    <div class="flex items-center">
                                                        <input id="1_demontrasi" name="f22" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="1" />
                                                        <label for="1_demontrasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Sangat
                                                            Besar (1)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="2_demontrasi" name="f22" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="2" />
                                                        <label for="2_demontrasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Besar
                                                            (2)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="3_demontrasi" name="f22" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="3" />
                                                        <label for="3_demontrasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Cukup
                                                            Besar
                                                            (3)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="4_demontrasi" name="f22" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="4" />
                                                        <label for="4_demontrasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Kurang
                                                            Besar (4)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="5_demontrasi" name="f22" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="5" />
                                                        <label for="5_demontrasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Tidak
                                                            Sama
                                                            Sekali (5)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Partisipasi
                                                    dalam proyek riset (f23)</label>
                                                <div class="space-y-4 mb-4">
                                                    <div class="flex items-center">
                                                        <input id="1_partisipasi" name="f23" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="1" />
                                                        <label for="1_partisipasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Sangat
                                                            Besar (1)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="2_partisipasi" name="f23" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="2" />
                                                        <label for="2_partisipasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Besar
                                                            (2)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="3_partisipasi" name="f23" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="3" />
                                                        <label for="3_partisipasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Cukup
                                                            Besar
                                                            (3)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="4_partisipasi" name="f23" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="4" />
                                                        <label for="4_partisipasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Kurang
                                                            Besar (4)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="5_partisipasi" name="f23" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="5" />
                                                        <label for="5_partisipasi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Tidak
                                                            Sama
                                                            Sekali (5)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Magang
                                                    (f24)</label>
                                                <div class="space-y-4 mb-4">
                                                    <div class="flex items-center">
                                                        <input id="1_magang" name="f24" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="1" />
                                                        <label for="1_magang"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Sangat
                                                            Besar (1)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="2_magang" name="f24" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="2" />
                                                        <label for="2_magang"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Besar
                                                            (2)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="3_magang" name="f24" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="3" />
                                                        <label for="3_magang"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Cukup
                                                            Besar
                                                            (3)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="4_magang" name="f24" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="4" />
                                                        <label for="4_magang"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Kurang
                                                            Besar (4)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="5_magang" name="f24" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="5" />
                                                        <label for="5_magang"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Tidak
                                                            Sama
                                                            Sekali (5)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Praktikum
                                                    (f25)</label>
                                                <div class="space-y-4 mb-4">
                                                    <div class="flex items-center">
                                                        <input id="1_praktikum" name="f25" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="1" />
                                                        <label for="1_praktikum"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Sangat
                                                            Besar (1)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="2_praktikum" name="f25" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="2" />
                                                        <label for="2_praktikum"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Besar
                                                            (2)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="3_praktikum" name="f25" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="3" />
                                                        <label for="3_praktikum"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Cukup
                                                            Besar
                                                            (3)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="4_praktikum" name="f25" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="4" />
                                                        <label for="4_praktikum"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Kurang
                                                            Besar (4)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="5_praktikum" name="f25" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="5" />
                                                        <label for="5_praktikum"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Tidak
                                                            Sama
                                                            Sekali (5)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Kerja
                                                    Lapangan
                                                    (f26)</label>
                                                <div class="space-y-4 mb-4">
                                                    <div class="flex items-center">
                                                        <input id="1_kerjaLapangan" name="f26" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="1" />
                                                        <label for="1_kerjaLapangan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Sangat
                                                            Besar (1)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="2_kerjaLapangan" name="f26" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="2" />
                                                        <label for="2_kerjaLapangan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Besar
                                                            (2)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="3_kerjaLapangan" name="f26" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="3" />
                                                        <label for="3_kerjaLapangan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Cukup
                                                            Besar
                                                            (3)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="4_kerjaLapangan" name="f26" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="4" />
                                                        <label for="4_kerjaLapangan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Kurang
                                                            Besar (4)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="5_kerjaLapangan" name="f26" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="5" />
                                                        <label for="5_kerjaLapangan"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Tidak
                                                            Sama
                                                            Sekali (5)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <label class="block text-sm font-medium text-gray-700 mb-2">Diskusi
                                                    (f27)</label>
                                                <div class="space-y-4 mb-4">
                                                    <div class="flex items-center">
                                                        <input id="1_diskusi" name="f27" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="1" />
                                                        <label for="1_diskusi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Sangat
                                                            Besar (1)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="2_diskusi" name="f27" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="2" />
                                                        <label for="2_diskusi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Besar
                                                            (2)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="3_diskusi" name="f27" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="3" />
                                                        <label for="3_diskusi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Cukup
                                                            Besar
                                                            (3)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="4_diskusi" name="f27" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="4" />
                                                        <label for="4_diskusi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Kurang
                                                            Besar (4)
                                                        </label>
                                                    </div>
                                                    <div class="flex items-center">
                                                        <input id="5_diskusi" name="f27" type="radio"
                                                            class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                            value="5" />
                                                        <label for="5_diskusi"
                                                            class="ml-3 block text-sm font-medium text-gray-700">Tidak
                                                            Sama
                                                            Sekali (5)
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Kapan anda mulai mencari pekerjaan? Mohon pekerjaan
                                            sambilan tidak dimasukkan
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex items-center">
                                                <input id="sebelum" name="f301" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="1" />(1)(f301)
                                                <label for="sebelum"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Kira-kira
                                                    <input type="number" name="f302" placeholder="f302"
                                                        class="focus:ring-indigo-500 h-10 w-20 text-indigo-600 text-sm border-gray-300" />
                                                    bulan sebelum lulus
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="sesudah" name="f301" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="2" />(2)(f301)
                                                <label for="sesudah"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Kira-kira
                                                    <input type="number" name="f303" placeholder="f303"
                                                        class="focus:ring-indigo-500 h-10 w-20 text-indigo-600 text-sm border-gray-300" />
                                                    bulan sesudah lulus
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="tidak" name="f301" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300"
                                                    value="3" />(3)(f301)
                                                <label for="tidak"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Saya tidak
                                                    mencari
                                                    kerja
                                                </label>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Bagaimana anda mencari pekerjaan tersebut? Jawaban
                                            bisa lebih dari satu
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="0_f401" name="f401" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="0_f401" class="font-medium text-gray-700">Melalui iklan
                                                        di
                                                        koran/majalah, brosur
                                                        (f401)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="1_f402" name="f402" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="1_f402" class="font-medium text-gray-700">Melamar ke
                                                        perusahaan tanpa mengetahui lowongan
                                                        yang ada (f402)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="2_f403" name="f403" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="2_f403"
                                                        class="font-medium text-gray-700">Pergikebursa/pamerankerja
                                                        (f403)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="3_f404" name="f404" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="3_f404"
                                                        class="font-medium text-gray-700">Mencarilewatinternet/iklanonline/milis
                                                        (f404)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="4_f405" name="f405" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="4_f405" class="font-medium text-gray-700">Dihubungi oleh
                                                        perusahaan (f405)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="5_f406" name="f406" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="5_f406" class="font-medium text-gray-700">Menghubungi
                                                        Kemenakertrans (f406)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="6_f407" name="f407" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="6_f407" class="font-medium text-gray-700">Menghubungi
                                                        agen
                                                        tenaga kerja komersial/swasta
                                                        (f407)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="7_f408" name="f408" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="7_f408" class="font-medium text-gray-700">Memeroleh
                                                        informasi dari pusat/kantor
                                                        pengembangan karir fakultas/universitas
                                                        (f408)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="8_f409" name="f409" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="8_f409"
                                                        class="font-medium text-gray-700">Menghubungikantorkemahasiswaan/hubunganalumni
                                                        (f409)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="9_f410" name="f410" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="9_f410"
                                                        class="font-medium text-gray-700">Membangunjejaring(network)sejakmasihkuliah
                                                        (f410)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="10_f411" name="f411" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="10_f411" class="font-medium text-gray-700">Melalui
                                                        relasi
                                                        (misalnya dosen, orang tua,
                                                        saudara, teman, dll.) (f411)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="11_f412" name="f412" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="11_f412" class="font-medium text-gray-700">Membangun
                                                        bisnis
                                                        sendiri (f412)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="12_f413" name="f413" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="12_f413" class="font-medium text-gray-700">Melalui
                                                        penempatan kerja atau magang
                                                        (f413)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="13_f414" name="f414" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="13_f414" class="font-medium text-gray-700">Bekerja di
                                                        tempat
                                                        yang sama dengan tempat kerja
                                                        semasa kuliah (f414)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="14_f415" name="f415" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />(0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="14_f415" class="font-medium text-gray-700">Lainnya
                                                        (f415)
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="text" name="f4016" id="f4016" placeholder="f4016"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <li class="mb-4">
                                            Berapa perusahaan/instansi/institusi yang sudah anda
                                            lamar (lewat surat atau e-mail) sebelum anda memeroleh
                                            pekerjaan pertama? (f6)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex flex-row h-full">
                                                <div class="w-1/2">
                                                    <input type="number" max="100" name="f6" id="f6"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                </div>
                                                <p class="my-auto ml-2">
                                                    perusahaan/instansi/institusi
                                                </p>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Berapa banyak perusahaan/instansi/institusi yang
                                            merespons lamaran anda? (f7)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex flex-row h-full">
                                                <div class="w-1/2">
                                                    <input type="number" name="f7" max="100" id="f7"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                </div>
                                                <p class="my-auto ml-2">
                                                    perusahaan/instansi/institusi
                                                </p>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Berapa banyak perusahaan/instansi/institusi yang
                                            mengundang anda untuk wawancara? (f7a)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex flex-row h-full">
                                                <div class="w-1/2">
                                                    <input type="number" name="f7a" max="100" id="f7a"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                                </div>
                                                <p class="my-auto ml-2">
                                                    perusahaan/instansi/institusi
                                                </p>
                                            </div>
                                        </div>
                                        <li class="mb-4">
                                            Apakah anda aktif mencari pekerjaan dalam 4 minggu
                                            terakhir? Pilihlah satu jawaban (f1001)
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="flex items-center">
                                                <input id="1_activeSearch" name="f1001" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                                <label for="1_activeSearch"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Tidak
                                                    (1)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="2_activeSearch" name="f1001" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                                <label for="2_activeSearch"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Tidak, tapi
                                                    saya
                                                    sedang menunggu hasil lamaran
                                                    kerja (2)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="3_activeSearch" name="f1001" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                                <label for="3_activeSearch"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Ya, saya akan
                                                    mulai
                                                    bekerja dalam 2 minggu ke
                                                    depan (3)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="4_activeSearch" name="f1001" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                                <label for="4_activeSearch"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Ya, tapi saya
                                                    belum
                                                    pasti akan bekerja dalam 2
                                                    minggu ke depan (4)
                                                </label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="5_activeSearch" name="f1001" type="radio"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300" />
                                                <label for="5_activeSearch"
                                                    class="ml-3 block text-sm font-medium text-gray-700">Lainnya
                                                    (5)
                                                </label>
                                            </div>
                                            <input type="text" name="f1002" id="f1002" placeholder="f1002"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                        <li class="mb-4">
                                            Jika menurut anda pekerjaan anda saat ini tidak sesuai
                                            dengan : pendidikan anda, mengapa anda mengambilnya?
                                            Jawaban bisa lebih dari satu
                                        </li>
                                        <div class="space-y-4 mb-4">
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="0_f1601" name="f1601" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="0_f1601" class="font-medium text-gray-700">Pertanyaan
                                                        tidak
                                                        sesuai; pekerjaan saya
                                                        sekarang sudah sesuai dengan pendidikan saya.
                                                        (f1601)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="1_f1602" name="f1602" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="1_f1602" class="font-medium text-gray-700">Saya belum
                                                        mendapatkan pekerjaan yang lebih
                                                        sesuai. (f1602)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="2_f1603" name="f1603" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="2_f1603" class="font-medium text-gray-700">Di pekerjaan
                                                        ini
                                                        saya memeroleh prospek karir
                                                        yang baik. (f1603)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="3_f1604" name="f1604" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="3_f1604" class="font-medium text-gray-700">Saya lebih
                                                        suka
                                                        bekerja di area pekerjaan yang
                                                        tidak ada hubungannya dengan pendidikan saya.
                                                        (f1604)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="4_f1605" name="f1605" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="4_f1605" class="font-medium text-gray-700">Saya
                                                        dipromosikan
                                                        ke posisi yang kurang
                                                        berhubungan dengan pendidikan saya dibanding
                                                        posisi sebelumnya. (f1605)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="5_f1606" name="f1606" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="5_f1606" class="font-medium text-gray-700">Saya dapat
                                                        memeroleh pendapatan yang lebih
                                                        tinggi di pekerjaan ini. (f1606)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="6_f1607" name="f1607" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="6_f1607" class="font-medium text-gray-700">Pekerjaan
                                                        saya
                                                        saat ini lebih
                                                        aman/terjamin/secure (f1607)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="7_f1608" name="f1608" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="7_f1608" class="font-medium text-gray-700">Pekerjaan
                                                        saya
                                                        saat ini lebih menarik
                                                        (f1608)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="8_f1609" name="f1609" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="8_f1609" class="font-medium text-gray-700">Pekerjaan
                                                        saya
                                                        saat ini lebih memungkinkan saya
                                                        mengambil pekerjaan tambahan/jadwal yang
                                                        fleksibel, dll. (f1609)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="9_f1610" name="f1610" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="9_f1610" class="font-medium text-gray-700">Pekerjaan
                                                        saya
                                                        saat ini lokasinya lebih dekat
                                                        dari rumah saya. (f1610)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="10_f1611" name="f1611" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="10_f1611" class="font-medium text-gray-700">Pekerjaan
                                                        saya
                                                        saat ini dapat lebih menjamin
                                                        kebutuhan keluarga saya. (f1611)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="11_f1612" name="f1612" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="11_f1612" class="font-medium text-gray-700">Pada awal
                                                        meniti
                                                        karir ini, saya harus menerima
                                                        pekerjaan yang tidak berhubungan dengan
                                                        pendidikan saya (f1612)
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="relative flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="12_f1613" name="f1613" type="checkbox"
                                                        class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" />
                                                    (0/1)
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="12_f1613" class="font-medium text-gray-700">Lainnya
                                                        (f1613)
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="text" name="f1614" id="f1614" placeholder="f1614"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                        </div>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <button type="submit"
                            class="float-right shadow py-2 px-4 bg-blue-500 hover:bg-blue-700 rounded-md text-white active:bg-blue-700">
                            <i class="bi bi-check-circle-fill mr-1"></i>
                            Submit
                            Jawaban
                            Anda
                        </button>
                    </form>

                    {{-- batas kuisioner --}}
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('addon-after-style')
<!-- Scripts -->
@vite(['resources/css/app.css', 'resources/js/app.js'])
<style data-href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap">
    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrFJM.woff) format("woff");
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6V1g.woff) format("woff");
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7V1g.woff) format("woff");
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJbecnFHGPezSQ.woff2) format("woff2");
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D,
            U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJnecnFHGPezSQ.woff2) format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
            U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecnFHGPc.woff2) format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
            U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
            U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z11lFd2JQEl8qw.woff2) format("woff2");
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D,
            U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z1JlFd2JQEl8qw.woff2) format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
            U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLEj6Z1xlFd2JQEk.woff2) format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
            U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
            U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z11lFd2JQEl8qw.woff2) format("woff2");
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D,
            U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1JlFd2JQEl8qw.woff2) format("woff2");
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB,
            U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }

    @font-face {
        font-family: "Poppins";
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiByp8kv8JHgFVrLCz7Z1xlFd2JQEk.woff2) format("woff2");
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6,
            U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193,
            U+2212, U+2215, U+FEFF, U+FFFD;
    }
</style>
@endpush
@push('addon-before-script')
<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
@endpush
@push('addon-after-script')
<script>
    $('.page-content').on("change","#f5a1",function(){
            let id    = $(this).val();
            let token = $(this).data('token');
            $.ajax({
                type: 'POST',
                url: "{{ route('getkabkota') }}",
                data:{
                    'id': id, '_token': token,
                },
                success: function(response) {
                    $("#f5a2").html(response);
                }
            });
        });
</script>
@endpush