<x-base-layout>
    @include('pages.companies.info._nav')

    <div class="card">
        <div class="card-body pt-6">
            <table id="kt_datatable_zero_configuration" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                <tr class="fw-semibold fs-6 text-muted">
                    <th>Наименование</th>
                    <th>Информация</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>ИНН</td>
                    <td>{{ $inn }}</td>
                </tr>
                <tr>
                    <td>Наименование</td>
                    <td>{{ $name }}</td>
                </tr>
                <tr>
                    <td>Тип организации</td>
                    <td>{{ $type }}</td>
                </tr>

                @if(isset($address))
                    <tr>
                        <td>Адрес</td>
                        <td> {{ $address }} </td>
                    </tr>
                @endif

                @if(isset($management_name))
                    <tr>
                        <th>Руководитель</th>
                        <th>{{ $management_name }}</th>
                    </tr>
                @endif
                @if(isset($management_post))
                    <tr>
                        <th>Должность</th>
                        <th>{{ $management_post }}</th>
                    </tr>
                @endif

                <tr>
                    <td>ОГРН</td>
                    <td>{{ $ogrn }}</td>
                </tr>
                <tr>
                    <td>ОКПО</td>
                    <td>{{ $okpo }}</td>
                </tr>
                <tr>
                    <td>ОКАТО</td>
                    <td>{{ $okato }}</td>
                </tr>
                <tr>
                    <td>ОКТМО</td>
                    <td>{{ $oktmo }}</td>
                </tr>
                <tr>
                    <td>ОКОГУ</td>
                    <td>{{ $okogu }}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

</x-base-layout>
