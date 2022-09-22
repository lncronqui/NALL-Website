<x-user>
    <x-header></x-header>
    <div class="container h-75 p-md-5 p-4">
        <div class="row my-lg-2 my-1">
            <h1 class="display-6 my-md-4 my-3 text-center">A Gateway to Open Access<br>Legal Resource in the Philippines
            </h1>
            <form class="col-lg-10 col-11 mx-auto my-md-4 m-3" action="search" method="post">
                <div class="index-search input-group">
                    <i class="fa fa-search"></i>
                    <input type="text" class="indexSearch-input w-100 rounded-3 py-2 ps-0 ps-5 pe-3"
                        placeholder="Search for articles..." name="searchValue" id="">
                </div>
                <div class="index-advanceSearch p-3" id="index-advanceSearch">
                    <button class="btn btn-primary-outline border-0" type="button" aria-expanded="false"
                        onclick="showAdvanceSearch();">
                        <i class="fa-solid fa-angle-right fa-lg me-3" id="arrowRight"></i>
                        <h6 class="d-inline-block">Advance Search</h6>
                    </button>
                    <ul class="index-advanceSearch-check border-0 ms-5 my-2 form-check" id="index-advanceSearch-check"
                        style="display: none; list-style-type:none;">
                        <li class="my-2"><input type="checkbox" name="title" id=""
                                class=" form-check-input me-3"><span>Title</span>
                        </li>
                        <li class="my-2"><input type="checkbox" name="author" id=""
                                class=" form-check-input me-3"><span>Author</span></a>
                        </li>
                        <li class="my-2"><input type="checkbox" name="institution" id=""
                                class=" form-check-input me-3"><span>Institution</span></a></li>
                    </ul>
                </div>


            </form>
        </div>
    </div>
    <x-footer></x-footer>
    <script>
        arrow = document.getElementById("arrowRight");
        dropdown = document.getElementById("index-advanceSearch-check");

        function showAdvanceSearch() {
            if (dropdown.style.display == "none") {
                arrow.classList.remove("fa-angle-right");
                arrow.classList.toggle("fa-angle-down");
                dropdown.style.display = "block";
            } else {
                arrow.classList.toggle("fa-angle-right");
                arrow.classList.remove("fa-angle-down");
                dropdown.style.display = "none";
            }

        }
    </script>
</x-user>
