
@extends('layouts.plantilla')

@section('content')
    <div>
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h1>
                        Ventajas y Desventajas sobre otras distribuciones
                    </h1>
                </div>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12" >
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Distribuciones</th>
                            <th scope="col">Kali</th>
                            <th scope="col">Ubuntu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>Ventajas</td>
                            <td>

                                * Es Gratis.<br>
                                * Multilenguaje.<br>
                                * Totalmente Personalizable.<br>
                                * Entorno de desarrollo seguro.<br>
                                * Nuevas herramientas.<br>
                                * Código abierto.<br>
                                * Gran comunidad de soporte.<br>


                            </td>

                            <td>
                                * Es fácil de usar.<br>
                                * Totalmente Gratis.<br>
                                * Es Seguro.<br>
                                * Alta personalización.<br>
                                * Gran comunidad de soporte.<br>
                                * Menores requisitos de sistema.<br>
                                * Compatibilidad mejorada.<br>
                                * Código abierto.<br>
                            </td>
                        </tr>
                            <tr>

                                <td>Desventajas</td>
                                <td>
                                    * No siempre están todos los drivers disponibles<br>
                                    * Los desarrolladores de juegos de PC no suelen<br>
                                    hacer versiones comerciales para GNU/Linux.<br>
                                    * No es para principiantes, ya que no ofrece<br>
                                     un uso intuitivo como Microsoft.<br>

                                </td>
                                <td>
                                    * Al no ser un software utilizado por las grandes<br>
                                    compañias.Su sistema no es compatible con Office<br>
                                    * No te permite la instalación correcta de juegos<br>
                                    de alta gama.<br>
                                    * No permite la instalación de programas pesados.<br>

                                </td>
                            </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <img src="https://www.kali.org/images/kali-dragon-icon.svg" align="left" width="200" height="300">
        <img src="https://assets.ubuntu.com/v1/8114528b-picto-ubuntu-orange.png" align="right" width="100" height="100">
    </div>
@endsection

