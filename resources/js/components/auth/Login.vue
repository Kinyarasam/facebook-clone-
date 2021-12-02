<template>
    <div>
            <!-- Log in -->
        <div id="LogIn">
            <div class="p-20 h-screen w-screen flex flex-col md:flex-row items-center justify-center bg-gray-100 ">
                <div class="content text-3xl text-center md:text-left lg:mx-48">
                    <h1 class="font-bold text-blue-500 text-6xl mt-5">facebook</h1>
                    <p class="text-black text-2xl">facebook helps you connect and share with the people in your life</p>
            
                </div>
                <div class="container mx-auto flex flex-col items-center">
                    <form class="bg-white w-96 mx-auto rounded-lg my-20 px-4 py-4 shadow-xl ">
                        <input type='text' placeholder="Email or Phone Number"
                            class="w-full mb-3 px-4 py-3 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500" />
                        <input type='text' placeholder="Password"
                            class="w-full mb-3 px-4 py-3 border rounded-lg text-gray-700 focus:outline-none focus:border-blue-500" />
                        <button class="text-white py-3 rounded-lg font-bold text-xl tracking-wider w-full hover:opacity-95"
                            style="background-color:#1977f2;"
                            >
                            Log In</button>
                        <div class="flex justify-center my-4">
                            <a class="text-blue-500 hover:underline text-sm" href="#">Forgotten password?</a>
                        </div>
                        <hr />
                        <div class="flex justify-center my-6 bt_c">
                            <button @click.prevent="newModal = !newModal" class=" text-white h-12 rounded px-6 font-bold hover:opacity-95 hover:bg-green-600 " style="background-color:#54b72b" >
                                <span class="fas fa-user-plus fa-fw">Create New Account</span>
                            </button>
                        </div> 
                    </form>
                    <p class="text-center text-sm">
                        <span  class="font-semibold text-center w-full cursor-pointer" >Create a Page</span> for a celebrity, band or business
                    </p>
                </div>
                
            </div>
        </div>
        <!-- Create Account Modal -->
        <div v-if="newModal" class="bg-white bg-opacity-75 absolute inset-0 flex justify-center items-center transition duration-500">
            <div class="bg-white shadow-xl lg:h-96 lg:w-96 h-3/5 w-48 rounded-lg modal">
               <div class="grid grid-cols-2 p-4  border-b-2">
                <div class="text-4xl font-semibold">
                        Sign Up
                </div>
                <div class="place-self-end" @click="newModal = !newModal">
                    <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer place-self-end h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>

                </div>
                        
                        <p class="text-left text-gray-500 text-sm font-normal">It's quick and easy.</p>

               </div>
               
                <form action="" class="px-3 py-2">
                    <div class="flex justify-center items-center flex-col">
                        
                        <div class="grid-cols-2">
                            <input type="text" placeholder="First name" class="mb-2 mx-2 w-48 p-2 rounded cursor-pointer focus:outline-none border-gray-400 bg-gray-100" />
                            <input type="text" placeholder="Surname" class="mb-2 w-48 mx-2 px-4 p-2 rounded cursor-pointer focus:outline-none place-item-end border-gray-400 bg-gray-100"/>
                        </div>

                        <div class="grid-1">
                            <input type="text" placeholder="Mobile number or email address" class="mb-2 cursor-pointer w-full focus:outline-none p-2 rounded border-gray-400 bg-gray-100"/>
                            <input type="text" placeholder="New Password" class="mb-2 w-full p-2 rounded cursor-pointer focus:outline-none border-gray-400 bg-gray-100"/>
                        </div>

                    
                        <p class="text-sm mt-2 mx-3 text-gray-600 font-normal place-self-start">Date of birth</p>
                        <div class="grid-cols-3 justify-items-center">
                            <select name="day" id="day" class="p-2 w-32 cursor-pointer gender_f rounded border-gray-400">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                            <select name="month" id="month" class="p-2 mx-1 w-32 gender_f rounded border-gray-400 cursor-pointer">
                                <option value="jan">Jan</option>
                                <option value="feb">Feb</option>
                                <option value="mar">Mar</option>
                                <option value="apr">Apr</option>
                                <option value="may">May</option>
                                <option value="jun">Jun</option>
                                <option value="jul">Jul</option>
                                <option value="aug">Aug</option>
                                <option value="sep">Sep</option>
                                <option value="oct">Oct</option>
                                <option value="nov">Nov</option>
                                <option value="dec">Dec</option>
                            </select>
                            <select name="Year" id="year" class="cursor-pointer p-2 w-32 gender_f rounded border-gray-400">
                                <option value="">2021</option>
                                <option value="">2020</option>
                                <option value="">2019</option>
                                <option value="">2018</option>
                                <option value="">2017</option>
                                <option value="">2016</option>
                                <option value="">2015</option>
                                <option value="">2014</option>
                                <option value="">2013</option>
                                <option value="">2012</option>
                                <option value="">2011</option>
                                <option value="">2010</option>
                                <option value="">2009</option>
                                <option value="">2008</option>
                                <option value="">2007</option>
                                <option value="">2006</option>
                                <option value="">2005</option>
                                <option value="">2004</option>
                                <option value="">2003</option>
                                <option value="">2002</option>
                                <option value="">2001</option>
                                <option value="">2000</option>
                                <option value="">1999</option>
                                <option value="">1998</option>
                                <option value="">1997</option>
                                <option value="">1996</option>
                                <option value="">1995</option>
                                <option value="">1994</option>
                                <option value="">1993</option>
                                <option value="">1992</option>
                                <option value="">1991</option>
                                <option value="">1990</option>
                            </select>
                        </div>
                                                
                        <p class="text-sm mt-1 mx-3 justify-start place-self-start">Gender</p>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="gender_f p-2 mx-4 mb-2 border-gray-400 rounded w-32">
                                Female
                                <input type="radio" value="Female" />
                            </div>
                            <div  class="gender_f p-2 mb-2 mx-4 border-gray-400 rounded w-28">
                                Male
                                <input type="radio" value="Male" />
                            </div>
                            
                            <div class="gender_f p-2 mb-2 border-gray-400 rounded w-32">
                                Custom
                                <input type="radio" placeholder="Custom" class="place-self-end"/>
                            </div>
                        </div>

                        <p class="mx-4 text-sm font-medium  text-gray-500 policy tracking-tighter">By clicking Sign Up, you agree to our <span class="text-blue-800 hover:underline cursor-pointer">Terms</span>, <span class="text-blue-800 hover:underline cursor-pointer">Data Policy</span> and <span class="text-blue-800 hover:underline cursor-pointer">Cookie Policy</span>. You may receive SMS notifications from us and can opt out at any time.</p>
                        <div class="btn_s cursor-pointer tracking-widest text-center w-44 p-2 rounded-lg hover:opacity-90 mt-4 text-white text-bold">
                            <button type="submit" @click.prevent="" class="font-bold">Sign Up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 
                        

    </div>
  
</template>

<script>
export default {
    data() {
        return {
            newModal: false,
            createmode: false
            // form: new Form({

            // })
        }
    },
    mounted() {
        console.log('component mounted')  
    },
    methods : {
        // newModal : false
        // newModal() {
        //     console.log('call Modal')
        //     this.createmode = false
        //     // $('#addNew').modal('hide')
        // }
    }
}
</script>

<style scoped>
input {
  border-width: 1px;
    
}
.gender_f {
    border-width: 1px;
    /* width: 48px; */
}

.modal {
    height: 550px;
    width: 450px;
    margin-top: 100px;
}
.policy {
    font-size: 12px;
}
.btn_s {
    background-color: rgb(40, 170, 00);
}
.btn_c {
    background-color:#54b72b
}
.btn_c :hover {
    background-color:red;
    
}

</style>