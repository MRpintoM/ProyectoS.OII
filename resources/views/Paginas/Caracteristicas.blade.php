
@extends('layouts.plantilla')

@section('content')

        <div class="text-secondary">
            <div class="row">

                <div class="col-md-11 d-flex justify-content-center text-blue text-uppercase">
                    <h1>
                        <img src="https://www.kali.org/images/kali-dragon-icon.svg"  width="200" height="300">
                        Características de Kali Linux

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
            <div class="col-12 offset-1">
                <h4>Modo Forense</h4>
                <div class="col-6 offset-1">
                    <p align="justify">
                        En general, cuando se realiza trabajo forense en un sistema, se necesita evitar cualquier actividad la cual
                        pueda alterar los datos sobre el sistema analizado de cualquier manera. Desafortunadamente, los entornos de
                        escritorio modernos tienden a interferir con este objetivo, intentando montar automáticamente cualquier disco
                        detectado. Para evitar este comportamiento, Kali Linux tiene un modo forense, el cual puede ser habilitado desde
                        el menú de inicio: esto deshabilitará tales características.


                    </p>
                    <p align="justify">
                        El sistema en vivo particularmente útil para propósitos forenses,porque es posible reiniciar cualquier
                        computadora con el sistema Kali Linux, sin acceder o modificar los discos duros.
                    </p>
                </div>

            </div>

            <div class="col-12 offset-1">
                <h4>Kerner Linux Personalizado</h4>
                <div class="col-6 offset-1">
                    <p align="justify">
                        Kali Linux siempre proporciona un Kernel de Linux reciente personalizado, basado en la versión de Debian
                        “unstable”. Esto asegura soporte sólido de hardware, especialmente para un amplio rango de dispositivos
                        inalámbricos. El kernel está parchado para soporte de inyección inalámbrica, debido a muchas herramientas
                        par evaluaciones de seguridad inalámbrica confían en esta característica.


                    </p>
                    <p align="justify">
                        Debido a muchos dispositivos de hardware requieren archivos de firmwares actualizados (encontrados en /lib/firmware),
                        Kali Linux los instala por defecto; incluyendo el firmware disponible en la sección “non-free” de Debian. Esto no
                        son instalados por defecto en Debian, porque son de fuente cerrada, y por lo tanto no forman parte de Debian propiamente.
                    </p>
                </div>

            </div>
            <div class="col-12 offset-1">
                <h4>Completamente Personalizable</h4>
                <div class="col-6 offset-1">
                    <p align="justify">
                        Kali Linux es construido por profesionales en pruebas de penetración, pero se entiende no todos estarán
                        de acuerdo con las decisiones de diseño o selección de las herramientas incluidas por defecto. Con esto
                        en consideración, siempre se asegura Kali Linux sea fácil de personalizar basándose en necesidades y
                        preferencias propias. Al final se publica la configuración de la construcción en vivo utilizada para
                        construir las imágenes oficiales de Kali Linux, de tal manera se pueda configurar a gusto propio. Es muy
                        fácil iniciar desde esta configuración publicada e implementar varios cambios en función a necesidades propias,
                        gracias a una construcción en vivo versátil.


                    </p>
                    <p align="justify">
                        La construcción en vivo incluye muchas características para modificar el sistema instalado, instalar archivos
                        suplementarios, instalar paquetes adicionales, ejecutar comandos arbitrarios, y cambiar valores previamente
                        sembrados a debconf.
                    </p>
                </div>

            </div>
            <div class="col-12 offset-1">
                <h4>Sistema Operativo Confiable</h4>
                <div class="col-6 offset-1">
                    <p align="justify">
                        Los usuarios de una distribución de seguridad, con mucha razón requieren conocer a simple vista se puede
                        confiar en esta, y como ha sido desarrollada, lo cual permite a cualquiera inspeccionar el código fuente.
                        Kali Linux es desarrollado por un pequeño equipo de desarrolladores con muchos conocimientos, trabajando
                        de manera transparente y siguiendo las mejores prácticas en seguridad: suben paquetes fuente firmados, los
                        cuales son luego construidos en demonios de construcción dedicados. Los paquetes son luego verificados y
                        distribuidos como parte de un repositorio firmado. El trabajo hecho en los paquetes puede ser completamente
                        revisado a través de los repositorios Git de empaquetamiento (lo cual contiene etiquetas firmadas), los cuales
                        son utilizados para construir los paquetes fuentes de Kali Linux. La evolución de cada paquete también puede ser
                        seguida a través del “Rastreador de Paquetes de Kali”.


                    </p>

                </div>

            </div>
            <div class="col-12 offset-1">
                <h4>Utilizable en un Amplio Rango de Dispositivos ARM </h4>
                <div class="col-6 offset-1">
                    <p align="justify">
                        Kali Linux proporciona paquetes binarios para arquitecturas ARM armel,armhf, y arm64. Gracias a las imágenes
                        fácilmente instalables proporcionadas por Offensive Security, Kali Linux puede ser desplegado en muchos
                        dispositivos interesantes, desde teléfonos inteligentes y tables, hasta routers Wi-FI y computadoras de
                        varios tipos y tamaños.


                    </p>

                </div>


            </div>

@endsection
