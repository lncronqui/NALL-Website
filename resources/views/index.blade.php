<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ url('img/nall_logo.png') }}">
    <title>Index | NALL</title>
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    @include('import')
</head>

<body class="h-100">
    @include('marginals')
    <div class="container p-md-5 p-4">
        <div class="row my-lg-2 my-1">
            <h1 class="display-6 my-md-4 my-3 text-center">A Gateway to Open Access<br>Legal Resource in the Philippines</h1>
            <form class="col-lg-10 col-11 mx-auto my-md-4 m-3" action="search" method="post">
                <div class="index-search input-group">
                    <i class="fa fa-search"></i>
                    <input type="text" class="indexSearch-input w-100 rounded-3 py-2 ps-0 ps-5 pe-3"
                        placeholder="Search for articles..." name="searchValue" id="">
                </div>
                <div class="index-advanceSearch p-3" id="index-advanceSearch">
                    <button class="btn btn-primary-outline border-0" type="button"
                        aria-expanded="false" onclick="showAdvanceSearch();" >
                        <i class="fa-solid fa-angle-right fa-lg me-3" id="arrowRight"></i>
                        <h6 class="d-inline-block">Advance Search</h6>
                    </button>
                    <ul class="index-advanceSearch-check border-0 ps-5 py-0" id="index-advanceSearch-check" style="display: none; list-style-type:none;" >
                        <li><input type="checkbox" name="title" id="" class="me-3 my-3"><span>Title</span>
                        </li>
                        <li><input type="checkbox" name="author" id=""
                                class="me-3 my-3"><span>Author</span></a></li>
                        <li><input type="checkbox" name="institution" id=""
                                class="me-3 my-3"><span>Institution</span></a></li>
                    </ul>
                </div>


            </form>
        </div>

    </div>

</body>
<script>
    arrow = document.getElementById("arrowRight");
    dropdown = document.getElementById("index-advanceSearch-check");

    function showAdvanceSearch() {
        if(dropdown.style.display == "none"){
            arrow.classList.remove("fa-angle-right");
            arrow.classList.toggle("fa-angle-down");
            dropdown.style.display = "block";
        }else{
            arrow.classList.toggle("fa-angle-right");
            arrow.classList.remove("fa-angle-down");
            dropdown.style.display = "none";
        }

    }
</script>

</html>
