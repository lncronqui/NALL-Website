<div class="hello" id="blur">
<x-admin.layout>
<link href="/css/tableprinted.css" rel="stylesheet" type="text/css" />
<script crossorigin="anonymous" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <div class="grid-container grid lg:grid-cols-10 md:grid-cols-10 divide-x-4 divide-solid divide-gray-300 pt-10 pb-20 px-10">

            <div class="text-left col-span-2">
                <x-admin.side-nav></x-admin.side-nav>
                <script>
                        const myElement = document.getElementById("view-repository");
                        myElement.style.color = "#2E052D";
                        myElement.style.fontWeight = "500";
                </script>
            </div>

            <div class="text-left col-span-8">
                <div class="ml-10 mt-5 mr-8">
    
                    <h1 class="text-3xl font-extrabold mb-6 ml-2">View Repository</h1>

                    <div class="flex flex-row gap-x-2">
                        <form action="{{ route('admin.repository.view.printed') }}" method="get">
                            <div class="search-bar search-length">
                                <i class="fa fa-search" aria-hidden="true"></i>
                                <input type="text" name="search">
                            </div>
                        </form>

                        <button class="btn" style="height: 3.3rem; width: 9rem; border-radius: 10px;"><a class="no-underline" href="{{ route('admin.repository.create') }}">+Add Article</a></button>
                    </div>

                    <div class="flex flex-row gap-x-2 mt-6 " >
                        <h1 class="text-2xl font-extrabold ml-2">Type: </h1>
                            <div class="select ml-2">
                            <select name="format" id="editFormat" onChange="siteRedirect()">
                                    <option selected disabled value="{{ route('admin.repository.view.printed') }}">Printed</option>
                                    <option value="{{ route('admin.repository.view.elec') }}">Electronic Resource</option>
                                    <option value="{{ route('admin.repository.view.video') }}">Video</option>
                                    <option value="{{ route('admin.repository.view.audio') }}">Audio</option>
                                </select>
                            </div>
                    </div>

                    <!-- display if submission is success or error-->
                    @if (session('success'))
                        <div class="font-bold text-left pb-2" style="color:green;">
                                {{ session('success') }}
                        </div>
                    @endif

                    <div class="print">
                        <div class="tbl-header">
                            <table cellpadding="0" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Institution</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Subject</th>
                                        <th>Pages</th>
                                        <th>Access Type</th>
                                        <th>Publishing Date</th>
                                        <th>Encoded By</th>
                                        <th>
                                            @if (auth()->user()->role_id == 3)
                                                Approved by
                                            @else
                                                Status
                                            @endif
                                        </th>
                                        <th>Functions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="tbl-content">
                            <table cellpadding="0" cellspacing="0">
                                <tbody>
                                    @foreach ($mediaResources as $mediaResource)
                                        <tr>
                                            <td>{{ $mediaResource->institution->name }}</td>
                                            <td>{{ $mediaResource->title }}</td>
                                            <td>
                                                @foreach ($mediaResource->authors as $author)
                                                    @if ($loop->last)
                                                        {{ $author->name }}
                                                    @else
                                                        {{ $author->name }},
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach ($mediaResource->subjects as $subject)
                                                    @if ($loop->last)
                                                        {{ $subject->name }}
                                                    @else
                                                        {{ $subject->name }},
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $mediaResource->page }}</td>
                                            <td>
                                                @if ($mediaResource->access_type->public)
                                                    Public
                                                @else
                                                    Private
                                                @endif
                                            </td>
                                            <td>{{ $mediaResource->date }}</td>
                                            <td>{{ $mediaResource->encoded_by }}</td>
                                            <td>
                                                @if (auth()->user()->role_id == 3)
                                                    {{ $mediaResource->approved_by }}
                                                @else
                                                    @if (isset($mediaResource->approved_by))
                                                        Released
                                                    @else
                                                        To approve
                                                    @endif
                                                @endif
                                            </td>
                                            <td>                                                    
                                                <form method="POST" action="{{ route('admin.repository.destroy', $mediaResource) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class=" btn-danger  show_confirm" data-toggle="tooltip" title='Delete'>Delete</button>
                                                </form>
                                            </td>
                                            </tr>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
<script>
    function siteRedirect() {
        var selectbox = document.getElementById("editFormat");
        var selectedValue = selectbox.options[selectbox.selectedIndex].value;
        window.location.href = selectedValue;
    }</script>
</x-admin.layout>
<!-- 
 <div id="popup2">
                                                    <form
                                                        action="{{ route('admin.repository.destroy', $mediaResource) }}"
                                                        method="post" id="del">
                                                    @csrf
                                                    @method('DELETE')

                                                    <h1 class="text-center text-lg font-bold">Repository Deletion</h1>
                                                    <br>
                                                    <p class="text-center">Are you sure that you want to delete this
                                                    Repository?</p>
                                                    <br>
                                                    </form>

                                                    <div class="text-center">
                                                        <button class="btn4" style="width: 6em;" form="del">Yes</button>
                                                        <button class="btn4" onClick="toggle2()" data-dismiss="popup2" style="width: 6em;">No</button>
                                                    </div>
                                                </div> -->