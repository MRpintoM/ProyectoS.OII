
@extends('layouts.plantilla')

@section('content')
    <div>
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h1>
                        Ventajas y Desventajas de Kali Linux
                    </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 offset-1">
                <h4>Sistema Vivo</h4>
                <div class="col-6 offset-1">
                    <p align="justify">
                        Contrario a la mayoría de distribuciones Linux, la imagen ISO principal la cual se descarga
                        no está simplemente dedicada a instalar el sistema operativo; esta puede ser utilizada también
                        como un sistema iniciable en vivo. En otras palabras, se puede utilizar Kali Linux sin instalarlo,
                        únicamente iniciando la imagen ISO (usualmente después de ser copiada la imagen en una unidad USB).


                    </p>
                    <p align="justify">
                        El sistema vivo contiene las herramientas comúnmente utilizadas por los profesionales en pruebas de
                        penetración, de tal manera incluso si el sistema de uso diario no es Kali Linux, se puede simplemente
                        insertar el disco o unidad USB, para luego reiniciarlo y ejecutar Kali Linux. Sin embargo se debe tener
                        en consideración, la configuración por defecto no preserva los cambios entre reinicios. Si se configura la
                        persistencia con una unidad USB, luego se puede ajustar el sistema a necesidades específicas (por ejemplo;
                        modificar archivos de configuración, guardar reportes, actualizar software, e instalar paquetes adicionales),
                        además de los cambios serán conservados entre reinicios.
                    </p>
                </div>

            </div>

        </div>


    </div>
@endsection

