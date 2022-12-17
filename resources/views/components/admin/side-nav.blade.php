<div class="flex flex-col gap-y-10 ml-16 mt-6" style="margin-bottom: 25rem;">
    <a id="view-repository" class="admin-hovertext" href="{{ route('admin.repository.index') }}">View Repository</a>
    @if (auth()->user()->role->id == 3)
        <a id="approving" class="admin-hovertext" href="{{ route('admin.overall.approve.index') }}">Approving of Papers/Video</a>
        <a id="aboutus-edit" class="admin-hovertext" href="{{ route('admin.overall.website-info.index') }}">Editing of About Us</a>
        <a id="useradmin-list" class="admin-hovertext" href="{{ route('admin.overall.accounts.index') }}">User and Admin List</a>
        <a id="institution-list" class="admin-hovertext" href="{{ route('admin.overall.institutions.index') }}">Institution List</a>
    @endif
    <a id="access-request" class="admin-hovertext" href="{{ route('admin.access-request.index') }}">Access Requests</a>


</div>
