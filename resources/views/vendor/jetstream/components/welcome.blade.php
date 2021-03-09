<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <x-jet-application-logo class="block h-12 w-auto"/>
    </div>

    <div class="mt-8 text-2xl">
        Selamat datang di Aplikasi Demo Tes Interview Bridgenote
    </div>

    <div class="mt-6 text-gray-500">
        Apilkasi ini dibangun dengan menggunakan Laravel Starter Kits yaitu Breze dan Jetstram. Breze digunakan untuk
        membuat fitur Login dan Manajemen Pengguna
        Sementara Jetstream digunakan untuk manajemen otentikasi api token. Aplikasi juga dilengkapi dengan dokumentasi
        yang dibuat menggunakan Scribe. Tabel dibawah menampilkan user dari aplikasi
        ini. Tabel ini dibuat dengan menggunakan DataTable
    </div>
</div>

<div class="p-6 sm:px-20 bg-gray-200 bg-opacity-25">
    <div class="mt-6">
    <table id="table_user" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Position</th>
            <th>Status</th>
        </tr>
        </thead>
    </table>
</div>
</div>
@push('js')

    <script>
        $(document).ready(function () {

            $('#table_user').DataTable({

                processing: true,
                serverSide: false,
                ajax: '/dashboard/json',
                columns: [
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'position.position', name: 'position.position'},
                    {data: 'position.status', name: 'position.status'},
                ],

            });

        });


    </script>
@endpush
