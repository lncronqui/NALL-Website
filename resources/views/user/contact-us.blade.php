<x-guest-layout>
    <x-slot name="slot">
        <!-- Contact Us  -->
        <div class="imgc">
            <img src="/img/contact-us.png" alt="" class="mx-auto w-full">
        </div>

        <h1 class="pt-20 text-5xl font-extrabold font-inter text-center" style="color:#2E052D;">Contact Us</h1>

        <div class="flex justify-center container mx-auto my-auto w-screen flex-col pr-40 pl-40 pt-20 pb-20">
            <form method="POST" action="{{ route('user.contact-us.store') }}">
                @csrf
                <!-- name input -->
                <div class="mb-2">
                    <label class="text-lg font-bold" style="color:#2E052D;">Name*</label>
                    <!-- <label class="text-xs" style="color:#704f6f;">Required</label> -->
                </div>
                <div class="w-full flex flex-col bg-slate-50 items-center rounded-md mb-6">
                    <input type="text" name="name" id="name"
                        class="w-full py-4 px-8 bg-slate-200 placeholder:font-light rounded outline-slate-500 border-solid border-slate-300"
                        placeholder="Enter your name" required>
                </div>

                <!-- email input -->
                <div class="mb-2">
                    <label class="text-lg font-bold " style="color:#2E052D;">Email*</label>
                    <!-- <label class="text-xs" style="color:#704f6f;">Required</label> -->
                </div>
                <div class="w-full  flex flex-col bg-slate-50 items-center rounded-md mb-6">
                    <input type="email" name="email" id="email"
                        class="w-full py-4 px-8 bg-slate-200 placeholder:font-light rounded outline-slate-500 border-solid border-slate-300"
                        placeholder="Enter your email" required>
                </div>

                <!-- subject input -->
                <div class="mb-2">
                    <label class="text-lg font-bold" style="color:#2E052D;">Subject*</label>
                    <!-- <label class="text-xs" style="color:#704f6f;">Required</label> -->
                </div>
                <div class="w-full flex flex-col bg-slate-50 items-center rounded-md mb-6">
                    <input type="text" name="subject" id="subject"
                        class="w-full py-4 px-8 bg-slate-200 placeholder:font-light rounded outline-slate-500 border-solid border-slate-300"
                        placeholder="Type the subject" required>
                </div>

                <!-- message input -->
                <div class="mb-2">
                    <label class="text-lg font-bold" style="color:#2E052D;">Message*</label>
                    <!-- <label class="text-xs" style="color:#704f6f;">Required</label> -->
                </div>
                <div class="w-full flex flex-col bg-slate-50 items-center rounded-md mb-6">
                    <textarea type="text" name="message" id="message"
                        class="w-full py-6 px-8 bg-slate-200 placeholder:font-light rounded outline-slate-500 border-solid border-slate-300"
                        style="height: 18rem; text-align:left; vertical-align:top;" placeholder="Type your message here..." required></textarea>
                </div>

                <!-- button -->
                <div class="btn mt-12">
                    <button style="display: block; width: 100%;" type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>

    </x-slot>
</x-guest-layout>
