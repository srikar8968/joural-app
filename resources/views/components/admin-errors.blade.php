<div class="mb-4 w-full relative">
    @if (!Session::has('message') && !count($errors))
        <div class="h-8"></div>
    @endif
    @if (count($errors) > 0)
    <div class="bg-gradient-fuchsia p-4 rounded shadow text-white text-sm font-semibold leading-tight">
        @foreach ($errors->all() as $error)
            <p class="flex mb-1">&bull;&nbsp;&nbsp;{{ $error }}</p>
        @endforeach
    </div>
    @endif
</div>