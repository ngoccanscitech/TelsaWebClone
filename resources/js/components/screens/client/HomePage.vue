<template>
    <div>
        <div class="promotion">
                <v-main>
                    <div class="text-center" style="margin-top:13%">
                        <h1 class="display-2">Go Electric</h1>
                        <h1 class="display-2">Save the planet</h1>
                    </div>
                </v-main>
        </div>
       
  <div style="background-color:black;margin-top:-10px">
        <v-container fill-width fluid>
       <v-layout row>
           <v-flex xs12 class="display-1 white--text font-weight-black ma-10 text-center">
                Specification
           </v-flex>
       </v-layout>
       <v-row style="margin-top:60px;">
           <v-col cols="6">
               <v-row>
                   <v-col cols="2"></v-col>
                   <v-col cols="10">
                       <v-img width="100%" alt="ngoccan" src="./../assets/MX-Interior-Grid-A-Desktop.jpeg"></v-img>
                   </v-col>
               </v-row>
           </v-col>
           <v-col cols="6" class="white--text" style="align-self:center">
               <div class="ml-4" style="width:36%">
                   <span style="font-size:23px" class="mb-2">Wireless Gaming</span>
                   <br>
                   <span>Up to 10 teraflops of processing power enables in-car gaming on-par with today’s newest consoles. Wireless controller compatibility lets you game from any seat.</span>
               </div>
           </v-col>
       </v-row>
        <v-row style="margin-top:0px">
           <v-col cols="6" class="white--text" style="align-self:center">
              <v-row justify="end">
                  <div class="mb-2 mr-4" style="width:36%">
                      <span style="font-size:23px">
                          Stay connected
                      </span>
                      <br>
                      <span>
                          Multi-device Bluetooth, wireless and USB-C charging for every passenger, with enough power to fast-charge your tablets and laptop.
                      </span>
                  </div>
              </v-row>
           </v-col>
           <v-col cols="6">
               <v-row>
                   <v-col cols="10">
                       <v-img width="100%" alt="ngoccan" src="./../assets/MX-Interior-Grid-B-Desktop.jpeg"></v-img>
                   </v-col>
                   <v-col cols="2"></v-col>
               </v-row>
           </v-col>
       </v-row>
       <v-row>
           <v-col cols="6">
               <v-row>
                   <v-col cols="2"></v-col>
                   <v-col cols="10">
                       <v-img width="100%" alt="ngoccan" src="./../assets/MX-Interior-Grid-C-Desktop.jpeg"></v-img>
                   </v-col>
               </v-row>
           </v-col>
           <v-col cols="6" class="white--text" style="align-self:center">
               <div class="ml-4" style="width:36%">
                   <span style="font-size:23px" class="mb-2">Your Best Audio System</span>
                   <br>
                   <span>A 22-speaker, 960-watt audio system with active noise canceling offers the best listening experience at home or on the road.</span>
               </div>
           </v-col>
       </v-row>
   </v-container>
  </div>
    <div>
       <v-img style="width:100%" src="./../assets/MX-Interior-Hero-Desktop.jpeg"></v-img>
    </div>
    <div style="background-color:black;margin-top:-10px">
        <div fluid class="background" style="display:table">
            <div style="display:table-cell;vertical-align:bottom;padding-bottom:140px">
                <v-row>
                    <v-col>
                        <h1 class="white--text font-weight-light" style="padding-left: 60vh">1,020hp</h1>
                        <p class="white--text" style="padding-left: 60vh"> Peak power</p>
                    </v-col>
                     <v-col>
                        <h1 class="white--text font-weight-light text-center">9.9s</h1>
                        <p class="white--text text-center"> 1/4 mile</p>
                    </v-col>
                     <v-col>
                        <h1 class="white--text font-weight-light text-right" style="padding-right: 60vh">2.5s</h1>
                        <p class="white--text text-right" style="padding-right: 60vh"> 0-60 mph*</p>
                    </v-col>
                </v-row>
            </div>
        </div>
    </div>
     <div style="background-color:black;margin-top:-10px">
        <div class="text-left pt-3">
            <v-row>
                <img style="height:600px" src="/assets/MX-Specs-Hero-Desktop.jpeg" alt="">
                <v-layout align-center>
                    <h1 class="white--text">Telsa Model X</h1>
                    <v-btn style="border-radius:18px" class="ml-3">OrderNow</v-btn>
                </v-layout>
            </v-row>
        </div>
    </div>
    </div>
</template>
<script>
export default {

}
</script>
<style>
.promotion{
        background: url('/assets/MX-Hero-Desktop.jpeg');
        background-size: cover;
        width: 100%;
        height: 100vh;
    }
     .background{
        background: url('/assets/MX-Performance-Hero-Desktop.jpeg');
        background-size: cover;
        width:100%;
        height: 115vh;
    }
</style>
