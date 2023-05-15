
<div class=" mx-auto py-12 ">
    <div class="relative z-0 w-full mb-6 group"> 
        <img src="{{asset('/storage/image3.jpg')}}" alt="">
    </div>
    <div class="grid md:grid-cols-3 md:gap-6">
    <div class="relative z-0 w-full mt-8 pt-8 mb-6 group"> 
        <div class="mb-10"><img src="{{asset('/storage/image1.jpg')}}" alt=""></div>
    </div>
        <div class="mb-2">
            <form action="{{ route('store')}}" method="POST">
                @csrf
            <label for="apellido" class="block  text-sm font-medium text-green-700 dark:text-green-500">Apellido</label>
                <input wire:model= "apellido" type="text" name="apellido" id="apellidp" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                placeholder="Escriba su apellido">
                <x-input-error for='apellido'/>

                <x-input-text> 
                    Apellido
                </x-input-text>  
            
            <label for="nombre" class="block  text-sm font-medium text-green-700 dark:text-green-500">Apellido</label>
                <input type="text" name="nombre" id="username-success" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                placeholder="Escriba su nombre ">
            
            <label for="dni" class="block  text-sm font-medium text-green-700 dark:text-green-500">DNI</label>
                <input type="text" name="dni" id="username-success" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                placeholder="Escriba su DNI">
        <div class="grid md:grid-cols-2 md:gap-6">
            <div class="mb-2">
                <label for="Whatsapp-codigo-pais" class="block  text-sm font-medium text-green-700 dark:text-green-500">Còdigo Pais</label>
                <input type="text" name="whatsappcodigopais" id="username-success" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                placeholder="Codigo del paìs">
            </div>


            <div class="mb-2">
                <label for="numero-telefono" class="block  text-sm font-medium text-green-700 dark:text-green-500">Telefono</label>
                <input type="text" name="numerotelefono" id="username-success" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                placeholder="XX-XXXX-XXXX">
            </div>      
        </div>
                <label for="email" class="block  text-sm font-medium text-green-700 dark:text-green-500">Correo Electrònico</label>
                <input type="text" name="email" id="username-success" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                placeholder="ejemplo@empresa.com">

                <label for="direccion" class="block  text-sm font-medium text-green-700 dark:text-green-500">Direccion</label>
                <input type="text" name="direccion" id="username-success" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                placeholder="Escriba la calle la altura, localidad y provincia">
                
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-2">
                    <label for="patrocinador" class="block  text-sm font-medium text-green-700 dark:text-green-500">Patrocinador</label>
                    <input type="text" name="patrocinador" id="username-success" class="bg-green-50 border border-green-800 
                    text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                    focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                    placeholder="ADI de su patrocinador">
                    </div>
                    <div class="mb-2">
                    <label for="idcondicionfiscal" class="block  text-sm font-medium text-green-700 dark:text-green-500">Selecccione una opcion</label>
                    <select id="countries" name="id-condicion-fiscal" class="bg-green-50 border border-green-800 
                    text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                    focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800">
                      <option selected>Seleccione una opciòn</option>
                      <option value="Responsable Inscripto">Responsable Inscripto</option>
                      <option value="Responsable Monotributo">Responsable Monotributo</option>
                      <option value="Consumidor Final">Consumidor Final</option>
                      
                    </select>
                    </div>
                </div>
                <div class="mb-2">
                    <label for="id-provincia" class="block  text-sm font-medium text-green-700 dark:text-green-500">Provincia</label>
                    <select wire:model="selectedProvincia" id="countries" name="idprovincia" class="bg-green-50 border border-green-800 
                    text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                    focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" >
                      @foreach ($provincias as $provincia)
                      <option value="{{$provincia->id_provincia}}">{{$provincia->nombre_provincia}}</option>
                      @endforeach
                    
                    </select>
                </div>
                @if (!is_null($localidades))
                <div class="mb-2">
                    <label for="id-localidad" class="block  text-sm font-medium text-green-700 dark:text-green-500">Localidad</label>
                    <select wire:model="selectedLocalidad" id="countries" name="idlocalidad" class="bg-green-50 border border-green-800 
                    text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                    focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" >
                      <option selected>Seleccione una Localidad</option>
                      @foreach ($localidades as $localidad)
                        <option value="{{ $localidad->id_localidad }}">{{ $localidad->nombre_localidad }}</option>
                        @endforeach
                      
                    </select>
                </div>
                @endif

                <label for="codigo-postal" class="block  text-sm font-medium text-green-700 dark:text-green-500">codigo-postal</label>
                <input type="text" name="codigopostal" id="username-success" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 dark:bg-green-100 dark:border-green-800" 
                placeholder="codigo-postal">

                <label for="cuit" class="block  text-sm font-medium text-green-700 dark:text-green-500">CUIT</label>
                <input type="text" name="cuit" id="username-success" class="bg-green-50 border border-green-800 
                text-green-900 placeholder-green-800 text-sm rounded-lg focus:ring-green-500 
                focus:border-green-500 block w-full p-1.5 mb-10  dark:bg-green-100 dark:border-green-800" 
                placeholder="Escriba su cuit">

                
                <button type="submit" class="text-white bg-gradient-to-r from-green-500 via-green-600 
                to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 
                dark:focus:ring-green-800 shadow-lg shadow-green-600/50 dark:shadow-lg 
                dark:shadow-green-900/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                Enviar</button>
            </form>
        </div>
        <div class="relative z-0 w-full mt-8 pt-8 mb-6 group"> 
            <div class="mb-10"><img src="{{asset('/storage/image2.jpg')}}" alt=""></div>
        </div>

    </div>
</div>
