<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    @foreach ($nav as $item)
    <a class="nav-link {{ $loop->first ? 'active':'' }}" id="v-pills-{{ $item }}-tab" data-toggle="pill"
        href="#v-pills-{{ $item }}" role="tab" aria-controls="v-pills-{{ $item }}"
        aria-selected="true">{{ ucfirst($item) }}</a>
    @endforeach
</div>