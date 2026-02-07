<x-app-layout>
    <div class="max-w-4xl mx-auto p-10">
        <h3> esto es lo que contiene componente dentro y se lee como parte de la estructura o contenido slot</h3>
        <x-button type='warning' id="ir">ir a la pagina principal</x-button>
        <x-button type='success' id="success">boton de inicio</x-button>
        <x-alert type='danger' title="Ejemplo de boton" id="alerta">mensaje de alert</x-alert>
        <x-alert2 type="danger" class="mb-4" title="parametro de titulo">
            
        </x-alert2> 
    </div>
</x-app-layout>