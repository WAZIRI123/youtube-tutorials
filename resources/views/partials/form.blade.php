<div class="bg-white p-4 grid grid-cols-1 gap-8 rounded-lg shadow-xl py-8 mt-12">
    <!-- start:: Multiple Columns -->
    <div>
        <h4 class="text-xl capitalize">Multiple Columns</h4>
        <form>
            <div class="grid grid-cols-2 gap-8">
                <div class="flex flex-col my-4">
                    <label for="first_name_multiple_columns">First Name</label>
                    <input type="text" name="first_name_multiple_columns" id="first_name_multiple_columns" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:border-gray-300 focus:outline-none focus:ring-0" placeholder="Your First Name">
                </div>
                <div class="flex flex-col my-4">
                    <label for="email_multiple_columns">Email</label>
                    <input type="email" name="email_multiple_columns" id="email_multiple_columns" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:outline-none focus:ring-0 focus:border-gray-300" placeholder="Your Email Address">
                </div>
            </div>
            <div class="grid grid-cols-3 gap-8">
                <div class="flex flex-col my-4">
                    <label for="address_multiple_columns">Address</label>
                    <input type="text" name="address_multiple_columns" id="address_multiple_columns" class="flex-1 py-1 border-gray-300 mt-1 rounded focus:outline-none focus:ring-0 focus:border-gray-300" placeholder="Your Address">
                </div>
                <div class="flex flex-col my-4">
                    <label for="city_multiple_columns">Country</label>
                    <select name="rounded_select" id="rounded_select" class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg">
                        @foreach ($contries  as $country )
                        <option value="{{  $country['id'] }}">{{  $country['name'] }}</option>
                        @endforeach
              
                    
                    </select>
                </div>
                <div class="flex flex-col my-4">
                    <label for="state_multiple_columns">cities</label>
                    <select name="rounded_select" id="rounded_select" class="mt-2 py-1 border-gray-300 focus:outline-none focus:ring-0 focus:border-gray-300 rounded-lg">
                        @foreach ($cities  as $city )
                        <option value="{{  $city['id'] }}">{{  $city['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div class="flex flex-col my-4">
                    <label for="password_multiple_columns">Password</label>
                    <div x-data="{ show: false }" class="relative flex-1 mt-1 flex items-center">
                        <input :type=" show ? 'text': 'password' " name="password_multiple_columns" id="password_multiple_columns" class="flex-1 py-1 pr-10 border-gray-300 rounded focus:outline-none focus:ring-0 focus:border-gray-300" placeholder="Your Password" type="password">
                        <button type="button" class="absolute right-2 bg-transparent flex items-center justify-center" @click="show = !show">
                            <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>

                            <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col my-4">
                    <label for="password_confirmation_multiple_columns">Password Confirmation</label>
                    <div x-data="{ show: false }" class="relative flex-1 mt-1 flex items-center">
                        <input :type=" show ? 'text': 'password' " name="password_confirmation_multiple_columns" id="password_confirmation_multiple_columns" class="flex-1 py-1 pr-10 border-gray-300 rounded focus:outline-none focus:ring-0 focus:border-gray-300" placeholder="Confirm Password" type="password">
                        <button type="button" class="absolute right-2 bg-transparent flex items-center justify-center" @click="show = !show">
                            <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>

                            <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </button>
                    </div>
                </div>

                <div class="flex gap-2">
                    <button class="bg-secondary bg-opacity-20 hover:bg-opacity-40 rounded-lg px-6 py-1.5 text-secondary hover:shadow-xl transition duration-150">Cancel</button>

                    <button class="bg-primary hover:bg-primary-dark rounded-lg px-6 py-1.5 text-gray-100 hover:shadow-xl transition duration-150">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>