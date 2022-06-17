<table class="border border-gray-400 max-w-full rounded overflow-x-scroll">
    <thead>
        <tr class="text-sm bg-gray-200 text-left">
            <th class="w-3/5 py-4 px-6 text-gray-700">Journal Name</th>
            <th class="w-1/5 py-4 px-6 text-gray-700 border-l border-r border-gray-400">Journal Impact Factor*</th>
            <th class="w-1/5 py-4 px-6 text-gray-700">Citations Report</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($journals as $journal)
            <tr class="border-t border-b border-gray-400 text-sm {{ $loop->index % 2 === 0 ? '' : 'bg-gray-50' }}">
                <td class="w-3/5 py-4 px-6">
                    <a class="text-blue-600 inline-block mb-2" href="/">{{ $journal->title }}</a>
                    <span class="block whitespace-pre-line leading-relaxed">{{ $journal->info }}</span>
                </td>
                <td class="w-1/5 py-4 px-6 text-center border-l border-r border-gray-400">{{ $journal->impact_factor }}</td>
                <td class="w-1/5 py-4 px-6 text-center">
                    @if (!empty($journal->citations_report_url))
                        <a href="{{ $journal->citations_report_url }}" class="text-blue-600">Citations Report</a>
                    @else
                        -
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>