<h2>Files</h2>

@if (empty($files))
    <h3>No loaded files.</h3>
@else
    <table class="op-table">
    @foreach ($files as $file)
        <tr><td><span class="indicator">{{ \Onigoetz\Profiler\Utils::getReadableSize($file['size']) }}</span> {{ $file['name'] }}</td></tr>
    @endforeach
    </table>
@endif
