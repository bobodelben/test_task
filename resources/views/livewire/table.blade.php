<div>
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                @foreach ($headers as $header => $value)
                    <th
                        class="px-6 py-3 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        {{ $header }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($data as $row)
                <tr>
                    @foreach ($headers as $header => $value)
                        @if ($header == 'Action')
                            <td>
                                <livewire:is :component="$value" />
                            </td>
                        @else
                            <td class="px-6 py-4 whitespace-no-wrap">{{ data_get($row, $value) }}
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
