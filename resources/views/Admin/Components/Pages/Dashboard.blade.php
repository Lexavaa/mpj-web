<x-AdminLayout title="Dashboard">
    @if (auth()->user()->khodim->role == 'Administrator')
{{-- ESPECIALLY ADMIN ROLE --}}
        @include('Admin.Components.Pages.HomeAdmin')
            @elseif(auth()->user()->khodim->role !== 'Administrator')
{{-- ESPECIALLY USER ROLE --}}
                @foreach ($profile as $profiles_row)
                    @if ($profiles_row->nama_media != null && $profiles_row->jumlah_santri != null)
{{-- ESPECIALLY USER ROLE IF NOT FILL COMPLETED FORM --}}
                        @include('Admin.Components.Pages.HomeForm')
                    @else
{{-- ESPECIALLY USER ROLE IF FILL COMPLETED FORM --}}
                        @include('Admin.Components.Pages.HomeUser')
                    @endif
            @endforeach
        @endif
</x-AdminLayout>