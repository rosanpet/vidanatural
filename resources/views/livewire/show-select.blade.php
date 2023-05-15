<div>
  <div class=" mx-auto py-12 ">
    
    <div class="grid md:grid-cols-3 md:gap-6">

        <div class="relative z-0 w-full mb-6 group"> 
        <img src="{{asset('/storage/image1.jpg')}}" class="h-auto max-w-full" alt="">
        </div>

        <div class="relative z-0 w-full  mb-6 group"> 
        <div class="mb-6">
        <img src="{{asset('/storage/image3.jpg')}}" class="h-auto max-w-full" alt=""> 
        </div>
          <form>
            <x-input-text>
              <x-slot name="placeholder">
                Giorgi
              </x-slot>
              <x-slot name="name" name="apellido">
                apellido
              </x-slot>
              Apellido
            </x-input-text>

            <x-input-text>
              <x-slot name="name">
                nombre
              </x-slot>
              <x-slot name="placeholder">
                Martina
              </x-slot>
              Nombre
            </x-input-text>

        </div>
      <div class="relative z-0 w-full mt-8 pt-8 mb-6 group"> 
        <img src="{{asset('/storage/image2.jpg')}}" class="h-auto max-w-full" alt="">
      <div class="mb-10"></div>
    </div>
    {{$provincias}}
  </div>
</div>
