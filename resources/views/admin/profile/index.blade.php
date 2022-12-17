<x-admin.layout>
    <!--L-side-->
    <div class="flex pt-16 pr-10 pb-20">
        <div class="flex-none w-120 border-r-4 border-gray-300 max-h-full">
            <span class="dot absolute ml-12"></span>
            <h5 class="font-semibold mx-24 mb-6" style="color:#2E052D; font-size:20px;">Settings and Privacy</h5>
            <span class="dot absolute ml-12" style="margin-top:40.5rem;"></span>
            <h5 class="font-normal mx-24 mb-6" style="color:#F45353; font-size:20px; margin-top:42rem;"><a
                    href="{{ route('admin.logout') }}">Sign Out</a></h5>
        </div>

        <!--R-side-->
        <div class="flex-auto w-64 ...">
            <div class="pl-16 pr-32 mb-5 py-6">
                <div class="text-3xl font-semibold text-left pb-4">Settings and Privacy</div>
                <table style="width:100%; height:25rem; border-collapse: collapse;">
                    <tbody style="border-top: 1pt solid #949494; border-bottom: 1pt solid #949494;">
                        <tr style="border-bottom: 1px solid #949494;">
                            <td class="pl-8">Name</td>
                            <td for="name">{{ auth()->user()->name }}</td>
                            <td><a href="{{ route('admin.profile.edit.name') }}" style="color:#863084;">Edit</a></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #949494;">
                            <td style="width:30%;" class="pl-8">Email</td>
                            <td for="email">{{ auth()->user()->email }}</td>
                            <td><a href="{{ route('admin.profile.edit.email') }}" style="color:#863084;">Edit</a></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #949494;">
                            <td class="pl-8">Institution</td>
                            <td for="institution">{{ auth()->user()->institution->name }}</td>
                            <td><a href="{{ route('admin.profile.edit.institution') }}" style="color:#863084;">Edit</a></td>
                        </tr>
                        <tr style="border-bottom: 1px solid #949494;">
                            <td class="pl-8">Password</td>
                            <td for="password">***********</td>
                            <td><a href="{{ route('admin.profile.edit.password') }}" style="color:#863084;">Edit</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>>
</x-admin.layout>
