<footer class="bg-gray-100 text-center lg:text-left" style="background-color:#2E052D; color:white">
    <div class="mx-auto px-0 w-full pl-24 pr-20">
        <div class="grid pt-20 pb-20 lg:grid-cols-4 md:grid-cols-4">
            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Network of Academic Law Librarians, Inc.</h5>

                <ul class="list-none mb-0">
                    <li>
                        <div class="text-gray-200">Address 1: {{ $contactInfo->address_1 }}</div>
                    </li>
                    <li>
                        <div class="text-gray-200">Address 2: {{ $contactInfo->address_2 }}</div>
                    </li>
                    <li>
                        <div class="text-gray-200">City: {{ $contactInfo->city }}</div>
                    </li>
                    <li>
                        <div class="text-gray-200">Zip Code: {{ $contactInfo->zip_code }}</div>
                    </li>
                    <li>
                        <div class="text-gray-200">Telephone Number: {{ $contactInfo->tel_number }}</div>
                    </li>
                    <li>
                        <div class="text-gray-200">Email:
                            <a href="mailto: {{ $contactInfo->email }}"
                                class="hovertext text-gray-200">{{ $contactInfo->email }}</a>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Links</h5>

                <ul class="list-none mb-0">
                    <li>
                        <a href="#!" class="hovertext text-gray-200">About Us</a>
                    </li>
                    <li>
                        <a href="#!" class="hovertext text-gray-200">Contact Us</a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/legal.education.board" class="hovertext text-gray-200">Legal
                            Education Board</a>
                    </li>

                    <h5 class="uppercase font-bold mt-4 mb-4 text-gray-200">My Account</h5>
                    <li>
                        <a href="{{ route('admin.profile.index') }}" class="hovertext text-gray-200">Settings &
                            Privacy</a>
                    </li>


                </ul>
            </div>

            <div class="text-left mb-6">
                <h5 class="uppercase font-bold mb-4 text-gray-200">Contact Us</h5>

                <ul class="list-none mb-0">
                    <li>
                        NALL FB Page: <a href="https://www.facebook.com/nallph.org"
                            class="hovertext text-gray-200">@nallph.org</a>
                    </li>
                    <li>
                        NALL E-mail Address: <a href="mailto: nall.phil2018@gmail.com"
                            class="hovertext text-gray-200">nall.phil2018@gmail.com</a>
                    </li>
                    <li>
                        LEB FB Page: <a href="https://www.facebook.com/legal.education.board"
                            class="hovertext text-gray-200">@legal.education.board</a>
                    </li>
                    <li>
                        LEB Website: <a href="https://leb.gov.ph/"
                            class="hovertext text-gray-200">https://leb.gov.ph/</a>
                    </li>
                    <li>
                        LEB Email Address: <a href="mailto: contact@leb.gov.ph"
                            class="hovertext text-gray-200">contact@leb.gov.ph</a>
                    </li>
                </ul>
            </div>

            <div class="text-left mb-6">

                <ul class="list-none mb-0">
                    <li>
                        <div class="text-gray-200">Copyright © 2022</div>
                    </li>
                    <li>
                        <div class="text-gray-200">A Gateway to Open Access Legal Resources in the Philippines,</div>
                    </li>
                    <li>
                        <div class="text-gray-200">Network of Academic Law Librarians, Inc.,</div>
                    </li>
                    <li>
                        <div class="text-gray-200">All rights reserved.</div>
                    </li>
                </ul>

                <h5 class="uppercase font-bold mb-4 text-gray-200 mt-4">Socials</h5>
                <div class="flex">
                    <a href="#!"><img src="/img/facebook.png" alt=""
                            class="h-12 w-12 hover:bg-pink-500"></a>
                    <a href="#!"><img src="/img/gmail.png" alt="" class="h-12 w-12 hover:bg-pink-500"></a>
                </div>
            </div>
        </div>
    </div>
</footer>
