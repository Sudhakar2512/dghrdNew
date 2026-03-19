<style>
.dashboard-heading {
    text-shadow: 1px 1px 2px grey; /* Reduce excessive blur */
    text-align: center;
    margin-top: 15px;
    display: block; 
    font-size:2.4em;
}
.content{
   display: flex;
   align-items: center;
   justify-content: center;
   height: 90%;
   text-align: center;
} 
.content img{
    height:200px;
}
@media (max-width:500px){
   .dashboard-heading{
    font-size:1.6em;
   }
   .content img{
    height:150px;
}
}
</style>
<x-layout>
    <div class="content-wrapper ">
         
        <div class="container-full">
            <section class="content">
                <div>
                    <!-- <img src="{{ asset('public/assets/images/bg-19.png')}}" class="hold-transition light-skin theme-primary bg-img" style="background-position: bottom right; height:500px;"> -->
                    <img src="{{ asset('public/assets/images/dghrd-logo.webp')}}" class="hold-transition light-skin theme-primary bg-img" style="background-position: bottom right;">
                    <h1 class="dashboard-heading">
                      Directorate General of Human Resource Development
                    </h1>
                </div>
            </section>
           
        </div>
       
    </div>
</x-layout>



