@extends('layouts.app')

@section('content')
<div id="menu-cards">
            <!-- second card -->
            <div id="account-info" class="fixed left-1/3 top-10 border-gray-300 rounded-md border-1 shadow-md">
                <div class="p-6 font-poppins">
                <div class="mb-5">
                    <!-- account details - message -->

                    <div class="text-xl font-semibold mb-2">Account Details</div>
                    <div class="text-sm text-gray-300">Manage your CodeWave Account</div>

                </div>

                <div>

                    <div class="flex flex-row gap-x-4 mb-3 w-52 ">
                         <!-- image section -->
                        <div>
                            <!-- image section -->
                            <img src="" alt="" class="w-10 h-10 border-2 rounded-full border-gray-400">
                        </div>
                        <div class="flex justify-center items-center">
                            <!-- message -->
                            <p class="font-medium text-sm ">Profile Pictures</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 w-full mb-3 gap-8">
                        <!-- name section -->
                         <div class="">
                            <div>First Name</div>
                            <form class="mt-2">
                                <input class="p-2 border-2 border-gray-200 rounded-sm" type="input" name="firstname" id="" placeholder="enter your name">
                            </form>
                         </div>

                         <div>
                            <div>Last Name</div>
                            <form class="mt-2">
                                <input class="p-2 border-2 border-gray-200 rounded-sm" type="input" name="firstname" id="" placeholder="enter your name">
                            </form>
                         </div>

                    </div>
                
                    <div class="mb-3">
<!-- email section-->
                        <div>Email Address</div>
                        <form>
                            <input class="w-full p-2 border-2 border-gray-200 rounded-sm" type="input" name="email" id="" placeholder="enter your email">
                        </form>
                    </div>

                    <div class="mb-3">
<!-- email section-->
                        <div>Gender</div>
                        <form class="mt-2">
                            <div class="mb-2">
                            <input type="radio" value="Male" name="gender">
                            <label for="gender">Male</label>
                            </div>
                            <div class="mb-2">   
                            <input type="radio" value="Female" name="gender">
                            <label for="gender">Female</label>
                            </div>
                            <!-- <input class="w-full p-2 border-2 border-gray-200 rounded-sm" type="input" name="email" id="" placeholder="enter your email"> -->
                        </form>
                    </div>
                    </div>
                </div>
            </div>

             <div id="subscribtion-info" class="fixed left-1/3 top-10 border-gray-300 rounded-md border-1 shadow-md">
                <div class="p-6 font-poppins">
                <div class="mb-5">
                    <!-- account details - message -->

                    <div class="text-xl font-semibold mb-2">Subscriptions</div>
                    <div class="text-sm text-gray-300">Manage your CodeWave Account</div>

                </div>

                <div>

                    <div class="flex flex-row gap-x-4 mb-3 w-52 ">
                         <!-- image section -->
                        <div>
                            <!-- image section -->
                            <img src="" alt="" class="w-10 h-10 border-2 rounded-full border-gray-400">
                        </div>
                        <div class="flex justify-center items-center">
                            <!-- message -->
                            <p class="font-medium text-sm ">Profile Pictures</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 w-full mb-3 gap-8">
                        <!-- name section -->
                         <div class="">
                            <div>First Name</div>
                            <form class="mt-2">
                                <input class="p-2 border-2 border-gray-200 rounded-sm" type="input" name="firstname" id="" placeholder="enter your name">
                            </form>
                         </div>

                         <div>
                            <div>Last Name</div>
                            <form class="mt-2">
                                <input class="p-2 border-2 border-gray-200 rounded-sm" type="input" name="firstname" id="" placeholder="enter your name">
                            </form>
                         </div>

                    </div>
                
                    <div class="mb-3">
<!-- email section-->
                        <div>Email Address</div>
                        <form>
                            <input class="w-full p-2 border-2 border-gray-200 rounded-sm" type="input" name="email" id="" placeholder="enter your email">
                        </form>
                    </div>

                    <div class="mb-3">
<!-- email section-->
                        <div>Gender</div>
                        <form class="mt-2">
                            <div class="mb-2">
                            <input type="radio" value="Male" name="gender">
                            <label for="gender">Male</label>
                            </div>
                            <div class="mb-2">   
                            <input type="radio" value="Female" name="gender">
                            <label for="gender">Female</label>
                            </div>
                            <!-- <input class="w-full p-2 border-2 border-gray-200 rounded-sm" type="input" name="email" id="" placeholder="enter your email"> -->
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            <div>
                ``
            </div>
        
        </div>
@endsection