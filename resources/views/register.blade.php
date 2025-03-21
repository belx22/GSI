<!DOCTYPE html>

<html lang="fr">

<!-- Mirrored from demo.foxthemes.net/socialite-v3.0/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 02:19:28 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.png')}}" rel="icon" type="image/png">

    <!-- title and description-->
    <title>EzChat</title>
    <meta name="description" content="Socialite - Social sharing network HTML Template">
   
    <!-- css files -->
    <link rel="stylesheet" href="{{ asset('assets/css/form/tailwind.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/form/style.css')}}">  
    
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
 
</head>
<body>
<?php
   if(isset($message)){
      foreach($message as $msg){
         echo '
         <div class="message">
            <span>'.$msg.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>

  <div class="sm:flex">
    
    <div class="relative lg:w-[580px] md:w-96 w-full p-10 min-h-screen bg-white shadow-xl flex items-center pt-10 z-10">

      <div class="w-full lg:max-w-sm mx-auto space-y-10" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">

        <!-- logo image-->
        <a href="#"> <img src="public/assets/images/logo.png" class="w-28 absolute top-10 left-10" alt=""></a>
        <a href="#"> <img src="public/assets/images/logo-light.png" class="w-28 absolute top-10 left-10 hidden" alt=""></a>
        <!-- logo icon optional -->
        <div class="hidden">
          <img class="w-12" src="assets/images/logo-icon.png" alt="Socialite html template">
        </div>

        <!-- title -->
        <div>
          <h2 class="text-2xl font-semibold mb-1.5"> Sign up to get started </h2>
          <p class="text-sm text-gray-700 font-normal">If you already have an account, <a href="./form-login.php" class="text-blue-700">Login here!</a></p>
        </div>
 

        <!-- form -->
        <form method="post" action="#" enctype="multipart/form-data"  class="space-y-7 text-sm text-black font-medium"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true">
            
          <div class="grid grid-cols-2 gap-4 gap-y-7">
     
            <!-- first name -->
            <div>
                <label for="email" class="">Nom</label>
                <div class="mt-2.5">
                    <input id="nom" name="nom" type="text"  autofocus="" placeholder="First name" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200"> 
                </div>
            </div>

            <!-- Last name -->
            <div>
                <label for="email" class="">Prenom</label>
                <div class="mt-2.5">
                    <input id="prenom" name="prenom" type="text" placeholder="Last name" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200"> 
                </div>
            </div>
          
            <!-- email -->
            <div class="col-span-2">
                <label for="email" class="">Email</label>
                <div class="mt-2.5">
                    <input id="email" name="email" type="email" placeholder="Email" required="" class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200"> 
                </div>
            </div>

            <!-- password -->
            <div>
              <label for="email" class="">Mot de passe</label>
              <div class="mt-2.5">
                  <input id="password" name="password" type="password" placeholder=""  class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200">  
              </div>
            </div>

            <!-- Confirm Password -->
            <div>
                <label for="email" class="">Confirmer le mot de passe</label>
                <div class="mt-2.5">
                    <input id="cpassword" name="cpassword" type="password" placeholder=""  class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200">  
                </div>
            </div>
            
            <div>
                <label for="email" class="">Coisir votre avatar</label>
                <div class="mt-2.5">
                    <input id="image" name="image" type="file" placeholder=""  class="!w-full !rounded-lg !bg-transparent !shadow-sm !border-slate-200">  
                </div>
            </div>
            

            <!-- <div class="col-span-2">

              <label class="inline-flex items-center" id="rememberme">
                <input type="checkbox" id="accept-terms" class="!rounded-md accent-red-800" />
                <span class="ml-2">you agree to our <a href="#" class="text-blue-700 hover:underline">terms of use </a> </span>
              </label>
              
            </div> -->


            <!-- submit button -->
            <div class="col-span-2">
              <button name="submit"  class="button bg-primary text-white w-full">Valider</button> <br><br>
              <a  class="button bg-primary text-white w-full" href="./index.html">back</a>
            </div>

          </div>

          <!-- <div class="text-center flex items-center gap-6"> 
            <hr class="flex-1 border-slate-200"> 
            Or continue with  
            <hr class="flex-1 border-slate-200">
          </div>  -->

          <!-- social login -->
          <!-- <div class="flex gap-2" uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 400 ;repeat: true">
            <a href="#" class="button flex-1 flex items-center gap-2 bg-primary text-white text-sm"> <ion-icon name="logo-facebook" class="text-lg"></ion-icon> facebook  </a>
            <a href="#" class="button flex-1 flex items-center gap-2 bg-sky-600 text-white text-sm"> <ion-icon name="logo-twitter"></ion-icon> twitter  </a>
            <a href="#" class="button flex-1 flex items-center gap-2 bg-black text-white text-sm"> <ion-icon name="logo-github"></ion-icon> github  </a>
          </div> -->
          
        </form>


      </div>

    </div>

    <!-- side Two -->
    <!-- image slider -->
    <div class="flex-1 relative bg-primary max-md:hidden">


      <div class="relative w-full h-full" tabindex="-1" uk-slideshow="animation: slide; autoplay: true">
    
        <ul class="uk-slideshow-items w-full h-full"> 
            <li class="w-full">
                <img src="public/assets/images/form/fox.jpg"  alt="" class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                <div class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10">
                    <div class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true" > 
                        <img class="w-12" src="public/assets/images/logo-icon.png" alt="Socialite html template">
                        <h4 class="!text-white text-2xl font-semibold mt-7"  uk-slideshow-parallax="y: 600,0,0">  Connect With Friends </h4> 
                        <p class="!text-white text-lg mt-7 leading-8"  uk-slideshow-parallax="y: 800,0,0;"> This phrase is more casual and playful. It suggests that you are keeping your friends updated on what’s happening in your life.</p>   
                    </div> 
                </div>
                <div class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"></div>
            </li>
            <li class="w-full">
              <img src="{{ asset('assets/images/form/info-fox.jpg')}}"  alt="" class="w-full h-full object-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
              <div class="absolute bottom-0 w-full uk-tr ansition-slide-bottom-small z-10">
                  <div class="max-w-xl w-full mx-auto pb-32 px-5 z-30 relative"  uk-scrollspy="target: > *; cls: uk-animation-scale-up; delay: 100 ;repeat: true" > 
                      <img class="w-12" src="{{ asset('assets/images/logo-icon.png')}}" alt="Socialite html template">
                      <h4 class="!text-white text-2xl font-semibold mt-7"  uk-slideshow-parallax="y: 800,0,0">  Connect With Friends </h4> 
                      <p class="!text-white text-lg mt-7 leading-8"  uk-slideshow-parallax="y: 800,0,0;"> This phrase is more casual and playful. It suggests that you are keeping your friends updated on what’s happening in your life.</p>   
                  </div> 
              </div>
              <div class="w-full h-96 bg-gradient-to-t from-black absolute bottom-0 left-0"></div>
          </li>
        </ul>
 
        <!-- slide nav -->
        <div class="flex justify-center">
            <ul class="inline-flex flex-wrap justify-center  absolute bottom-8 gap-1.5 uk-dotnav uk-slideshow-nav"> </ul>
        </div>
      
        
    </div>
  

    </div>
  
  </div>
  
   
    <!-- Uikit js you can use cdn  https://getuikit.com/docs/installation  or fine the latest  https://getuikit.com/docs/installation -->
    <script src="{{ asset('assets/js/form/uikit.min.js')}}"></script>
    <script src="{{ asset('assets/js/form/script.js')}}"></script>

    <!-- Ion icon -->
    <script type="module" src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="../../unpkg.com/ionicons%405.5.2/dist/ionicons/ionicons.js"></script>

      <!-- Dark mode -->
      <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
        } else {
        document.documentElement.classList.remove('dark')
        }

        // Whenever the user explicitly chooses light mode
        localStorage.theme = 'light'

        // Whenever the user explicitly chooses dark mode
        localStorage.theme = 'dark'

        // Whenever the user explicitly chooses to respect the OS preference
        localStorage.removeItem('theme')
    </script>

</body>

<!-- Mirrored from demo.foxthemes.net/socialite-v3.0/form-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Apr 2024 02:19:28 GMT -->
</html>