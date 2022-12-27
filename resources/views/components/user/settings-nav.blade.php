<div class="flex-none w-120 border-r-4 border-gray-300 max-h-full">
    <img class="absolute ml-12" src="/img/settings.png" alt="" style="margin-top: 0.4rem;">
    <h5 class="font-semibold mx-24 mb-6" style="color:#2E052D; font-size:20px;">Settings and Privacy</h5>
    <img class="absolute ml-12" style="margin-top:41.5rem;" src="/img/signout.png" alt="">
    <form action="{{ route('user.sign-out') }}" method="post">
        @csrf
        <h5 class="font-normal mx-24 mb-6" style="color:#F45353; font-size:20px; margin-top:42.5rem;">
            <button type="submit">Sign Out</button></h5>
    </form>
</div>
