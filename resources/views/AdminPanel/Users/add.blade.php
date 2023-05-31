<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../AdminPanel/assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../AdminPanel/assets/img/favicon.png" />
    <title>Register</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../AdminPanel/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../AdminPanel/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="../AdminPanel/assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
</head>

<body class="m-0 font-sans antialiased font-normal bg-white text-start text-base leading-default text-slate-500">

<main class="mt-0 transition-all duration-200 ease-in-out">
    <section class="min-h-screen">
        <div class="bg-top relative flex items-start pt-12 pb-56 m-4 overflow-hidden bg-cover min-h-50-screen rounded-xl" style="background-image: url({{asset('AdminPanel/assets/img/team-registerbg.jpg')}})">
            <span class="absolute top-0 left-0 w-full h-full bg-center bg-cover bg-gradient-to-tl from-zinc-800 to-zinc-700 opacity-60"></span>
            <div class="container z-10">
                <div class="flex flex-wrap justify-center -mx-3">
                    <div class="w-full max-w-full px-3 mx-auto mt-0 text-center lg:flex-0 shrink-0 lg:w-5/12">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex flex-wrap -mx-3 -mt-48 md:-mt-56 lg:-mt-48">
                <div class="w-full max-w-full px-3 mx-auto mt-0 md:flex-0 shrink-0 md:w-7/12 lg:w-5/12 xl:w-4/12">
                    <div class="relative z-0 flex flex-col min-w-0 break-words bg-white border-0 shadow-xl rounded-2xl bg-clip-border">
                        <div class="p-6 mb-0 text-center bg-white border-b-0 rounded-t-2xl">
                            <h5>Ro'yhatdan o'tish</h5>
                        </div>
                        <div class="flex-auto p-6">
                            <form action="{{ route('User.store') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <input id="name" type="text" name="name" placeholder="Name" required aria-label="Name" value="" aria-describedby="email-addon"  class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow">
                                </div>

                                <div class="mb-4">
                                    <input id="email" type="email" name="email" placeholder="Email" required value="" class="placeholder:text-gray-500 text-sm focus:shadow-primary-outline leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 px-3 font-normal text-gray-700 transition-all focus:border-blue-500 focus:bg-white focus:text-gray-700 focus:outline-none focus:transition-shadow" placeholder="Email" aria-label="Email" aria-describedby="email-addon" onkeyup="document.getElementById('check_email').value=document.getElementById('email').value; document.getElementById('check_button').click()">
                                </div>
                                <div id="pass1" class="mb-4 ppearance-none rounded-lg border border-solid border-gray-300">
                                    <input type="password" id="password" onkeyup="check1('password')" onclick="check1('password')" name="password" placeholder="password" style="width: 87%" required class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease  appearance-none rounded-lg border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                    <button id="viewpassword" type="button" onclick="viewpas()"><i class="fas fa-eye-slash"></i></button>
                                </div>
                                <div id="pass2" class="mb-4 ppearance-none rounded-lg border border-solid border-gray-300">
                                    <input type="password" id="passwordcon" onkeyup="check1('passwordcon');" onclick="check1('passwordcon');" name="password_confirmation" placeholder="Confirim Password" style="width: 87%" required class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease  appearance-none rounded-lg border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none" />
                                    <button id="viewpasswordcon" type="button" onclick="viewpas('passwordcon')"><i class="fas fa-eye-slash"></i></button>
                                </div>
                                <div class="mb-4">
                                    <label id="message" style="color: red"></label>
                                </div>
                                <div class="text-center">
                                    <input type="submit" value="Register" class="inline-block w-full px-5 py-2.5 mt-6 mb-2 font-bold text-center text-white align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer active:opacity-85 hover:-translate-y-px hover:shadow-xs leading-normal text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25 bg-gradient-to-tl from-zinc-800 to-zinc-700 hover:border-slate-700 hover:bg-slate-700 hover:text-white">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->


    <footer class="">
        <div class="container">
            <div class="flex flex-wrap -mx-3">
                <div class="w-8/12 max-w-full px-3 mx-auto mt-1 text-center flex-0">
                    <p class="mb-0 text-slate-400">
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        Created by
                        <a href="https://t.me/m_farangiiz" class="font-semibold dark:text-white text-slate-700" target="_blank">M.Farangiz</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
</main>
<form action="" onsubmit="return onsubmitForm(this)" method="POST" style="display: none">
    @csrf
    <input id="check_email" name="email">
    <input id="check_user" name="user">
    <button id="check_button" type="submit"></button>
</form>
<input id="cu" style="display: none" value="false">
</body>
<script>
    function viewpas()
    {
        let now=document.getElementById('viewpassword').innerHTML;
        if(now=='<i class="fas fa-eye-slash" aria-hidden="true"></i>') {
            document.getElementById('viewpassword').innerHTML = "<i class='fas fa-eye'></i>";
            document.getElementById('viewpasswordcon').innerHTML = "<i class='fas fa-eye'></i>";
            document.getElementById('password').type="text";
            document.getElementById('passwordcon').type="text";
        }
        else
        {
            document.getElementById('viewpassword').innerHTML = "<i class='fas fa-eye-slash'></i>";
            document.getElementById('viewpasswordcon').innerHTML = "<i class='fas fa-eye-slash'></i>";
            document.getElementById('password').type="password";
            document.getElementById('passwordcon').type="password";
        }
    }
</script>
</script>
<!-- plugin for scrollbar  -->
<script src="../AdminPanel/assets/js/plugins/perfect-scrollbar.min.js" async></script>
<!-- main script file  -->
<script src="../AdminPanel/assets/js/argon-dashboard-tailwind.js?v=1.0.1" async></script>
</html>
