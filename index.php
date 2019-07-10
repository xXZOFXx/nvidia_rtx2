<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/nvidia.png" width="10" height"10">
        <script src="js/jquery.js" charset="utf-8"></script>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>Nvidia</title>

  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="images/nvidia.png" width="100" height="80" alt="">
            </a>
                </nav>





            <div class="background">


              <div class="row formulario">






                <div class="col-sm-4" style="padding-top: 49px; padding-bottom:49px;">

                  <div class="">

                    <div class="box-form" style="padding-top: 67px;padding-bottom: 0px;">

                        <h2 style="margin-bottom: 2.5rem; ">Dejanos tus datos y recibe más información.</h2>


                      <form class="container" id="form-validation">
                        <div class="row">
                          <div class="col-md-6 mb-3" style="margin-top: -21px;">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></span></label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="*Nombre" required>
                          </div>
                          <div class="col-md-6 mb-3" style="margin-top: -21px;">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="*Apellidos"  required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3" style="margin-top: -21px;">
                            <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><!--<span class="text-danger">*</span>Empresa/Negocio--></label>
                            <input type="text" class="form-control" id="empresa" name="empresa" placeholder="*Empresa" required>
                        </div>
                            <!--<div class="invalid-feedback">

                            </div>-->

                            <!--div class="row"-->
                              <div class="col-md-6 mb-3" style="margin-top: -21px;">
                                <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                                <!--<div class="invalid-feedback">

                                </div>-->
                              </div>
                            <!--/div-->
                        </div>
                          <div class="row">

                            <div class="col-md-6 mb-3"style="margin-top: -21px;">
                              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                              <input type="mail" class="form-control" id="correo" name="correo" placeholder="*Correo" required>
                              <div class="invalid-feedback">

                              </div>
                            </div>
                            <div class="col-md-6" style="margin-top: -21px;">
                              <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"></label>
                              <select class="custom-select custom-select mb-2" id="pais" name="pais">
                            <option >País</option>
                            <option value="AFG">Afghanistan</option>
                          <option value="ALA">Åland Islands</option>
                          <option value="ALB">Albania</option>
                          <option value="DZA">Algeria</option>
                          <option value="ASM">American Samoa</option>
                          <option value="AND">Andorra</option>
                          <option value="AGO">Angola</option>
                          <option value="AIA">Anguilla</option>
                          <option value="ATA">Antarctica</option>
                          <option value="ATG">Antigua and Barbuda</option>
                          <option value="ARG">Argentina</option>
                          <option value="ARM">Armenia</option>
                          <option value="ABW">Aruba</option>
                          <option value="AUS">Australia</option>
                          <option value="AUT">Austria</option>
                          <option value="AZE">Azerbaijan</option>
                          <option value="BHS">Bahamas</option>
                          <option value="BHR">Bahrain</option>
                          <option value="BGD">Bangladesh</option>
                          <option value="BRB">Barbados</option>
                          <option value="BLR">Belarus</option>
                          <option value="BEL">Belgium</option>
                          <option value="BLZ">Belize</option>
                          <option value="BEN">Benin</option>
                          <option value="BMU">Bermuda</option>
                          <option value="BTN">Bhutan</option>
                          <option value="BOL">Bolivia, Plurinational State of</option>
                          <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                          <option value="BIH">Bosnia and Herzegovina</option>
                          <option value="BWA">Botswana</option>
                          <option value="BVT">Bouvet Island</option>
                          <option value="BRA">Brazil</option>
                          <option value="IOT">British Indian Ocean Territory</option>
                          <option value="BRN">Brunei Darussalam</option>
                          <option value="BGR">Bulgaria</option>
                          <option value="BFA">Burkina Faso</option>
                          <option value="BDI">Burundi</option>
                          <option value="KHM">Cambodia</option>
                          <option value="CMR">Cameroon</option>
                          <option value="CAN">Canada</option>
                          <option value="CPV">Cape Verde</option>
                          <option value="CYM">Cayman Islands</option>
                          <option value="CAF">Central African Republic</option>
                          <option value="TCD">Chad</option>
                          <option value="CHL">Chile</option>
                          <option value="CHN">China</option>
                          <option value="CXR">Christmas Island</option>
                          <option value="CCK">Cocos (Keeling) Islands</option>
                          <option value="COL">Colombia</option>
                          <option value="COM">Comoros</option>
                          <option value="COG">Congo</option>
                          <option value="COD">Congo, the Democratic Republic of the</option>
                          <option value="COK">Cook Islands</option>
                          <option value="CRI">Costa Rica</option>
                          <option value="CIV">Côte d'Ivoire</option>
                          <option value="HRV">Croatia</option>
                          <option value="CUB">Cuba</option>
                          <option value="CUW">Curaçao</option>
                          <option value="CYP">Cyprus</option>
                          <option value="CZE">Czech Republic</option>
                          <option value="DNK">Denmark</option>
                          <option value="DJI">Djibouti</option>
                          <option value="DMA">Dominica</option>
                          <option value="DOM">Dominican Republic</option>
                          <option value="ECU">Ecuador</option>
                          <option value="EGY">Egypt</option>
                          <option value="SLV">El Salvador</option>
                          <option value="GNQ">Equatorial Guinea</option>
                          <option value="ERI">Eritrea</option>
                          <option value="EST">Estonia</option>
                          <option value="ETH">Ethiopia</option>
                          <option value="FLK">Falkland Islands (Malvinas)</option>
                          <option value="FRO">Faroe Islands</option>
                          <option value="FJI">Fiji</option>
                          <option value="FIN">Finland</option>
                          <option value="FRA">France</option>
                          <option value="GUF">French Guiana</option>
                          <option value="PYF">French Polynesia</option>
                          <option value="ATF">French Southern Territories</option>
                          <option value="GAB">Gabon</option>
                          <option value="GMB">Gambia</option>
                          <option value="GEO">Georgia</option>
                          <option value="DEU">Germany</option>
                          <option value="GHA">Ghana</option>
                          <option value="GIB">Gibraltar</option>
                          <option value="GRC">Greece</option>
                          <option value="GRL">Greenland</option>
                          <option value="GRD">Grenada</option>
                          <option value="GLP">Guadeloupe</option>
                          <option value="GUM">Guam</option>
                          <option value="GTM">Guatemala</option>
                          <option value="GGY">Guernsey</option>
                          <option value="GIN">Guinea</option>
                          <option value="GNB">Guinea-Bissau</option>
                          <option value="GUY">Guyana</option>
                          <option value="HTI">Haiti</option>
                          <option value="HMD">Heard Island and McDonald Islands</option>
                          <option value="VAT">Holy See (Vatican City State)</option>
                          <option value="HND">Honduras</option>
                          <option value="HKG">Hong Kong</option>
                          <option value="HUN">Hungary</option>
                          <option value="ISL">Iceland</option>
                          <option value="IND">India</option>
                          <option value="IDN">Indonesia</option>
                          <option value="IRN">Iran, Islamic Republic of</option>
                          <option value="IRQ">Iraq</option>
                          <option value="IRL">Ireland</option>
                          <option value="IMN">Isle of Man</option>
                          <option value="ISR">Israel</option>
                          <option value="ITA">Italy</option>
                          <option value="JAM">Jamaica</option>
                          <option value="JPN">Japan</option>
                          <option value="JEY">Jersey</option>
                          <option value="JOR">Jordan</option>
                          <option value="KAZ">Kazakhstan</option>
                          <option value="KEN">Kenya</option>
                          <option value="KIR">Kiribati</option>
                          <option value="PRK">Korea, Democratic People's Republic of</option>
                          <option value="KOR">Korea, Republic of</option>
                          <option value="KWT">Kuwait</option>
                          <option value="KGZ">Kyrgyzstan</option>
                          <option value="LAO">Lao People's Democratic Republic</option>
                          <option value="LVA">Latvia</option>
                          <option value="LBN">Lebanon</option>
                          <option value="LSO">Lesotho</option>
                          <option value="LBR">Liberia</option>
                          <option value="LBY">Libya</option>
                          <option value="LIE">Liechtenstein</option>
                          <option value="LTU">Lithuania</option>
                          <option value="LUX">Luxembourg</option>
                          <option value="MAC">Macao</option>
                          <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                          <option value="MDG">Madagascar</option>
                          <option value="MWI">Malawi</option>
                          <option value="MYS">Malaysia</option>
                          <option value="MDV">Maldives</option>
                          <option value="MLI">Mali</option>
                          <option value="MLT">Malta</option>
                          <option value="MHL">Marshall Islands</option>
                          <option value="MTQ">Martinique</option>
                          <option value="MRT">Mauritania</option>
                          <option value="MUS">Mauritius</option>
                          <option value="MYT">Mayotte</option>
                          <option selected="true" value="MEX">Mexico</option>
                          <option value="FSM">Micronesia, Federated States of</option>
                          <option value="MDA">Moldova, Republic of</option>
                          <option value="MCO">Monaco</option>
                          <option value="MNG">Mongolia</option>
                          <option value="MNE">Montenegro</option>
                          <option value="MSR">Montserrat</option>
                          <option value="MAR">Morocco</option>
                          <option value="MOZ">Mozambique</option>
                          <option value="MMR">Myanmar</option>
                          <option value="NAM">Namibia</option>
                          <option value="NRU">Nauru</option>
                          <option value="NPL">Nepal</option>
                          <option value="NLD">Netherlands</option>
                          <option value="NCL">New Caledonia</option>
                          <option value="NZL">New Zealand</option>
                          <option value="NIC">Nicaragua</option>
                          <option value="NER">Niger</option>
                          <option value="NGA">Nigeria</option>
                          <option value="NIU">Niue</option>
                          <option value="NFK">Norfolk Island</option>
                          <option value="MNP">Northern Mariana Islands</option>
                          <option value="NOR">Norway</option>
                          <option value="OMN">Oman</option>
                          <option value="PAK">Pakistan</option>
                          <option value="PLW">Palau</option>
                          <option value="PSE">Palestinian Territory, Occupied</option>
                          <option value="PAN">Panama</option>
                          <option value="PNG">Papua New Guinea</option>
                          <option value="PRY">Paraguay</option>
                          <option value="PER">Peru</option>
                          <option value="PHL">Philippines</option>
                          <option value="PCN">Pitcairn</option>
                          <option value="POL">Poland</option>
                          <option value="PRT">Portugal</option>
                          <option value="PRI">Puerto Rico</option>
                          <option value="QAT">Qatar</option>
                          <option value="REU">Réunion</option>
                          <option value="ROU">Romania</option>
                          <option value="RUS">Russian Federation</option>
                          <option value="RWA">Rwanda</option>
                          <option value="BLM">Saint Barthélemy</option>
                          <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                          <option value="KNA">Saint Kitts and Nevis</option>
                          <option value="LCA">Saint Lucia</option>
                          <option value="MAF">Saint Martin (French part)</option>
                          <option value="SPM">Saint Pierre and Miquelon</option>
                          <option value="VCT">Saint Vincent and the Grenadines</option>
                          <option value="WSM">Samoa</option>
                          <option value="SMR">San Marino</option>
                          <option value="STP">Sao Tome and Principe</option>
                          <option value="SAU">Saudi Arabia</option>
                          <option value="SEN">Senegal</option>
                          <option value="SRB">Serbia</option>
                          <option value="SYC">Seychelles</option>
                          <option value="SLE">Sierra Leone</option>
                          <option value="SGP">Singapore</option>
                          <option value="SXM">Sint Maarten (Dutch part)</option>
                          <option value="SVK">Slovakia</option>
                          <option value="SVN">Slovenia</option>
                          <option value="SLB">Solomon Islands</option>
                          <option value="SOM">Somalia</option>
                          <option value="ZAF">South Africa</option>
                          <option value="SGS">South Georgia and the South Sandwich Islands</option>
                          <option value="SSD">South Sudan</option>
                          <option value="ESP">Spain</option>
                          <option value="LKA">Sri Lanka</option>
                          <option value="SDN">Sudan</option>
                          <option value="SUR">Suriname</option>
                          <option value="SJM">Svalbard and Jan Mayen</option>
                          <option value="SWZ">Swaziland</option>
                          <option value="SWE">Sweden</option>
                          <option value="CHE">Switzerland</option>
                          <option value="SYR">Syrian Arab Republic</option>
                          <option value="TWN">Taiwan, Province of China</option>
                          <option value="TJK">Tajikistan</option>
                          <option value="TZA">Tanzania, United Republic of</option>
                          <option value="THA">Thailand</option>
                          <option value="TLS">Timor-Leste</option>
                          <option value="TGO">Togo</option>
                          <option value="TKL">Tokelau</option>
                          <option value="TON">Tonga</option>
                          <option value="TTO">Trinidad and Tobago</option>
                          <option value="TUN">Tunisia</option>
                          <option value="TUR">Turkey</option>
                          <option value="TKM">Turkmenistan</option>
                          <option value="TCA">Turks and Caicos Islands</option>
                          <option value="TUV">Tuvalu</option>
                          <option value="UGA">Uganda</option>
                          <option value="UKR">Ukraine</option>
                          <option value="ARE">United Arab Emirates</option>
                          <option value="GBR">United Kingdom</option>
                          <option value="USA">United States</option>
                          <option value="UMI">United States Minor Outlying Islands</option>
                          <option value="URY">Uruguay</option>
                          <option value="UZB">Uzbekistan</option>
                          <option value="VUT">Vanuatu</option>
                          <option value="VEN">Venezuela, Bolivarian Republic of</option>
                          <option value="VNM">Viet Nam</option>
                          <option value="VGB">Virgin Islands, British</option>
                          <option value="VIR">Virgin Islands, U.S.</option>
                          <option value="WLF">Wallis and Futuna</option>
                          <option value="ESH">Western Sahara</option>
                          <option value="YEM">Yemen</option>
                          <option value="ZMB">Zambia</option>
                          <option value="ZWE">Zimbabwe</option>
                          </select>

                            </div>




                          </div>


                          <div class="row">

                            <div class="col">

                          <br>


                            <div class="row">
                              <div class="col" style="margin-top: -31px;">
                                <div class="form-group">
                                  <label for="colFormLabelSm" class="col-sm-7 col-form-label col-form-label-sm"></label>

                                  <div class="col-xs-7">
                                      <textarea class="form-control" id="comentarios" name="comentarios" placeholder="¿En que podemos ayudarte?" required  rows="6"></textarea>

                                  </div>

                              </div>
                              </div>
                            </div>


                            </div>


                          </div>

              <div class="row">
              <input type="hidden" id="oculto" name="oculto">
              </div>

                          <div class="row">

                              <div class="col-md-4 btnEnviar" style="margin-top: -11px;">
                                  <button onclick="enviarBtn();" class="btn btn-dark">Enviar</button>
                              </div>
                          </div>

                      </form>
                    </div>
                  </div>

                </div>



                <div class="col-md-8 align-items-center">


                    <div class="col">
                      <h1 class="render" style="color:white; font-size:70px; text-align:center; text-shadow: 5px 5px 5px black;padding-bottom: 50%;padding-top: 25%;">RENDERIZA EN TIEMPO RECORD CON NVIDIA QUADRO RTX</h1>
                    </div>



                  </div>







              </div>


            </div>


              <div class="col cuadro">

                <h2>La nueva tarjeta Quadro RTX es el sueño hecho realidad de muchos profesionales del 3D, los Motion Grapics y el diseño, ya que ha logradp optimizar aplicaciones cretivas como:</h2>


     <div class="col">


          <div class="col-md-12 texto">
            <div class="titulo">
              <h3>EDICIÓN DE VIDEO</h3>
            </div>
            <div class="row">
              <div class="col-md-4">

                <img src="images/uno.jpg" alt="">

              </div>

              <div class="col-md-8  row align-items-center ">

                <div class="col contenido">
                  <h4><li class="lista">Premiere Pro</li> </h4>
                  <h4><li class="lista">After Effects</li> </h4>
                  <h4><li class="lista">DaVinci Resolve</li> </h4>
                  <h4><li class="lista">AvidMediaComposer</li> </h4>
                  <h4><li class="lista">RED Cine-X</li> </h4>
                </div>



              </div>
            </div>
          </div>




          <div class="col-md-12 texto">
            <div class="titulo">
              <h3>DISEÑO GRAFICO</h3>
            </div>
            <div class="row">
              <div class="col-md-8 row align-items-center vista">

                <div class="col contenido">
                  <h4><li class="lista">Ilustrator</li> </h4>
                  <h4><li class="lista">IndDesing</li> </h4>
                  <h4><li class="lista">After Effects</li> </h4>
                  <h4><li class="lista">Dimenssion</li> </h4>
                </div>


              </div>

              <div class="col-md-4">

                <img src="images/2.png" alt="">


              </div>
            </div>
          </div>


          <div class="col-md-12 texto">
            <div class="titulo">
              <h3>ANIMACIÓN GRÁFICA Y 3D</h3>
            </div>
            <div class="row">
              <div class="col-md-4">

                <img src="images/3.png" alt="">

              </div>

              <div class="col-md-8 row align-items-center vista">

              <div class="col contenido">
                <h4><li class="lista">Unreal Energie 4</li> </h4>
                <h4><li class="lista">Unity</li> </h4>
                <h4><li class="lista">Maya</li> </h4>
                <h4><li class="lista">3ds Max</li></h4>
                <h4><li class="lista">Cinema 4D</li> </h4>

              </div>

              <div class="col contenido">

                <h4><li class="lista">V-Ray</li> </h4>
                <h4><li class="lista">Octane</li> </h4>
                <h4><li class="lista">Redshift</li> </h4>
                <h4><li class="lista">Blender</li> </h4>


              </div>


              </div>
            </div>
          </div>

          <div class="col-md-12 texto">
            <div class="titulo">
              <h3>FOTOGRAFÍA</h3>
            </div>
            <div class="row">
              <div class="col-md-8 row align-items-center vista">

                <div class="col contenido">
                  <h4><li class="lista">Photoshop</li> </h4>
                  <h4><li class="lista">Lightroom</li> </h4>
                  <h4><li class="lista">Capure One</li> </h4>


                </div>
              </div>

              <div class="col-md-4">

                <img src="images/4.png" alt="">




              </div>
            </div>
          </div>

          <div class="col-md-12 texto">
            <div class="titulo">
              <h3>MULTIMEDIA</h3>
            </div>
            <div class="row">
              <div class="col-md-4">

                <img src="images/5.png" alt="">

              </div>

              <div class="col-md-8 row align-items-center">

                <div class="col contenido">
                  <h4><li class="lista">OBS</li> </h4>
                  <h4><li class="lista">Streamlabs</li> </h4>
                  <h4><li class="lista">StreamElements</li> </h4>
                  <h4><li class="lista">Xslipt</li></h4>


                </div>


              </div>
            </div>
          </div>


        <div class="col">
          <h3>Trayendo consigo beneficios insuperables de:</h3>

          <div class="row">

            <div class="col-md-4">
              <div class=" contenedor">
                <div class="carta">
                  <img src="images/robot.png" alt="">
                  <h4>ANIMACIÓN 3D Fotos Realístas</h4>
                </div>

                </div>
            </div>

              <div class="col-md-4">
                <div class="contenedor">
                  <div class="carta">
                    <img src="images/gato.png" alt="">
                    <h4>RENDER IMPULSADO CON AI</h4>

                  </div>
                </div>
              </div>


              <div class="col-md-4">
                <div class="contenedor">
                  <div class="carta">
                    <img src="images/ciudad.png" alt="">
                    <h4>CALIDAD DE ULTRA VIDEO</h4>

                  </div>
                </div>
              </div>

          </div>

        </div>


            <p>Permitiendo enfocarse en hacer su trabajo de la mejor manera posible. Ya sea desarrollando productos revolucionarios o contando historias visuales espectacularmente vivídas. Quadro RTX ofrece el rendimiento para hacerlo de forma brillante.</p>


      </div>



<br>


<div class="container">

  <!--<div class="row">

          <div class="col-md-4">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal1">
              <img src="images/c1.jpg" width="100%" height="100%" alt="">
                </button>


                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modal1" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                  <div class="modal-body">

                    <div class="scroll-tree">

                        <div class="list-group" ng-repeat="item in items" >

                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">DELL PRECISION 7740</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">DELL PRECISION 7540</a>
                                </li>

                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                  <table class="table table-dark">
                                    <thead>
                                      <tr>
                                        <th scope="col">GPU</th>
                                        <th scope="col">MEMORY</th>
                                        <th scope="col">CUDA CORES</th>
                                        <th scope="col">TENSOR CORES</th>
                                        <th scope="col">RT CORES</th>
                                        <th scope="col">VR READY</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">RTX 5000</th>
                                        <td>16 GB GDDR6</td>
                                        <td>3072</td>
                                        <td>384</td>
                                        <td>48</td>
                                        <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                      </tr>
                                      <tr >
                                        <div class="col">
                                          <th scope="row">RTX 4000</th>
                                          <td>8 GB GDDR6</td>
                                          <td>2560</td>
                                          <td>320</td>
                                          <td>40</td>
                                          <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>
                                        </div>

                                      </tr>
                                      <tr>
                                        <th scope="row">RTX 3000</th>
                                        <td>6 GB GDDR6</td>
                                        <td>2304</td>
                                        <td>288</td>
                                        <td>36</td>
                                        <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>

                                      </tr>

                                    </tbody>
                          </table>
                        </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                  <table class="table table-dark">
                                    <thead>
                                      <tr>
                                        <th scope="col">GPU</th>
                                        <th scope="col">MEMORY</th>
                                        <th scope="col">CUDA CORES</th>
                                        <th scope="col">TENSOR CORES</th>
                                        <th scope="col">RT CORES</th>
                                        <th scope="col">VR READY</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">RTX 3000</th>
                                        <td>6 GB GDDR6</td>
                                        <td>2304</td>
                                        <td>288</td>
                                        <td>36</td>
                                        <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                      </tr>
                                      <tr>
                                        <th scope="row">T2000</th>
                                        <td>4 GB GDDR6</td>
                                        <td>1024</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td></td>

                                      </tr>
                                      <tr>
                                        <th scope="row">T1000</th>
                                        <td>4 GB GDDR6</td>
                                        <td>768</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>

                                      </tr>

                                    </tbody>
                          </table>

                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                              </div>


                        </div>

                      </div>
              </div>

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      </div>
                      </div>
                    </div>
                  </div>




          <div class="col-md-4">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal2">
              <img src="images/c2.jpg" width="100%" height="100%" alt="">
                </button>


                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modal2" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">HP ZBook 17 G6</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                  <div class="modal-body">

                    <div class="scroll-tree">

                        <div class="list-group" ng-repeat="item in items" >
                          <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">GPU</th>
                                  <th scope="col">MEMORY</th>
                                  <th scope="col">CUDA CORES</th>
                                  <th scope="col">TENSOR CORES</th>
                                  <th scope="col">RT CORES</th>
                                  <th scope="col">VR READY</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">RTX 5000</th>
                                  <td>16 GB GDDR6</td>
                                  <td>3072</td>
                                  <td>384</td>
                                  <td>48</td>
                                  <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                </tr>
                                <tr>
                                  <th scope="row">RTX 4000</th>
                                  <td>8 GB GDDR6</td>
                                  <td>2560</td>
                                  <td>320</td>
                                  <td>40</td>
                                  <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>

                                </tr>
                                <tr>
                                  <th scope="row">RTX 3000</th>
                                  <td>6 GB GDDR6</td>
                                  <td>2304</td>
                                  <td>288</td>
                                  <td>36</td>
                                  <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>

                                </tr>
                                <tr>
                                  <th scope="row">T1000</th>
                                  <td>5 GB GDDR5</td>
                                  <td>768</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>

                                </tr>
                              </tbody>
                            </table>
                        </div>

                      </div>
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      </div>
                      </div>
                    </div>
                  </div>


          </div>


          <div class="col-md-4">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal3">
              <img src="images/c3.jpg" width="100%" height="100%" alt="">
                </button>


                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="modal3" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lenovo P73</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                  <div class="modal-body">

                    <div class="scroll-tree">

                        <div class="list-group" ng-repeat="item in items" >
                          <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">GPU</th>
                                  <th scope="col">MEMORY</th>
                                  <th scope="col">CUDA CORES</th>
                                  <th scope="col">TENSOR CORES</th>
                                  <th scope="col">RT CORES</th>
                                  <th scope="col">VR READY</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">RTX 5000</th>
                                  <td>16 GB GDDR6</td>
                                  <td>3072</td>
                                  <td>384</td>
                                  <td>48</td>
                                  <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                </tr>
                                <tr>
                                  <th scope="row">RTX 4000</th>
                                  <td>8 GB GDDR6</td>
                                  <td>2560</td>
                                  <td>320</td>
                                  <td>40</td>
                                  <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>

                                </tr>
                                <tr>
                                  <th scope="row">RTX 3000</th>
                                  <td>6 GB GDDR6</td>
                                  <td>2304</td>
                                  <td>288</td>
                                  <td>36</td>
                                  <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>

                                </tr>
                                <tr>
                                  <th scope="row">T2000</th>
                                  <td>4 GB GDDR5</td>
                                  <td>1024</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>

                                </tr>

                                <tr>
                                  <th scope="row">P620</th>
                                  <td>4 GB GDDR5</td>
                                  <td>512</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>

                                </tr>
                              </tbody>
                            </table>
                        </div>

                      </div>
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      </div>
                      </div>
                    </div>
                  </div>


          </div>


          <div class="col-md-4">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal4">
              <img src="images/c4.jpg" width="100%" height="100%" alt="">
                </button>


                <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="modal4" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                  <div class="modal-body">

                    <div class="scroll-tree">

                        <div class="list-group" ng-repeat="item in items" >

                          <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home" aria-selected="true">MSI WS75</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile2" role="tab" aria-controls="profile" aria-selected="false">MSI WE75</a>
                                </li>

                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home2" role="tabpanel" aria-labelledby="home-tab">
                                  <table class="table table-dark">
                                    <thead>
                                      <tr>
                                        <th scope="col">GPU</th>
                                        <th scope="col">MEMORY</th>
                                        <th scope="col">CUDA CORES</th>
                                        <th scope="col">TENSOR CORES</th>
                                        <th scope="col">RT CORES</th>
                                        <th scope="col">VR READY</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">RTX 4000</th>
                                        <td>8 GB GDDR6</td>
                                        <td>2560</td>
                                        <td>320</td>
                                        <td>40</td>
                                        <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                      </tr>
                                      <tr>
                                        <th scope="row">RTX 3000</th>
                                        <td>6 GB GDDR6</td>
                                        <td>2304</td>
                                        <td>288</td>
                                        <td>36</td>
                                        <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>

                                      </tr>
                                      <tr>
                                        <th scope="row">T200</th>
                                        <td>4 GB GDDR5</td>
                                        <td>1024</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>-</td>

                                      </tr>

                                    </tbody>
                          </table>
                        </div>
                                <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">

                                  <table class="table table-dark">
                                    <thead>
                                      <tr>
                                        <th scope="col">GPU</th>
                                        <th scope="col">MEMORY</th>
                                        <th scope="col">CUDA CORES</th>
                                        <th scope="col">TENSOR CORES</th>
                                        <th scope="col">RT CORES</th>
                                        <th scope="col">VR READY</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">RTX 3000</th>
                                        <td>6 GB GDDR6</td>
                                        <td>2304</td>
                                        <td>288</td>
                                        <td>36</td>
                                        <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                      </tr>
                                      <tr>
                                        <th scope="row">T4000</th>
                                        <td>4 GB GDDR6</td>
                                        <td>1024</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td></td>

                                      </tr>


                                    </tbody>
                          </table>

                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                              </div>


                        </div>

                      </div>
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      </div>
                      </div>
                    </div>
                  </div>


          </div>


          <div class="col-md-4">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal5">
              <img src="images/c5.jpg" width="100%" height="100%" alt="">
                </button>


                <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="modal5" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">STUDIOBOOK W700G3T</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                  <div class="modal-body">

                    <div class="scroll-tree">

                        <div class="list-group" ng-repeat="item in items" >
                          <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">GPU</th>
                                  <th scope="col">MEMORY</th>
                                  <th scope="col">CUDA CORES</th>
                                  <th scope="col">TENSOR CORES</th>
                                  <th scope="col">RT CORES</th>
                                  <th scope="col">VR READY</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">RTX 3000</th>
                                  <td>6 GB GDDR6</td>
                                  <td>2304</td>
                                  <td>288</td>
                                  <td>36</td>
                                  <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                </tr>
                                <tr>
                                  <th scope="row">T2000</th>
                                  <td>4 GB GDDR5</td>
                                  <td>1024</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>

                                </tr>
                                <tr>
                                  <th scope="row">T1000</th>
                                  <td>4 GB GDDR5</td>
                                  <td>768</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>

                                </tr>



                              </tbody>
                            </table>
                        </div>

                      </div>
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      </div>
                      </div>
                    </div>
                  </div>


          </div>



          <div class="col-md-4">
            <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal6">
              <img src="images/c6.jpg" width="100%" height="100%" alt="">
                </button>


                <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="modal6" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bade Pro</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                  <div class="modal-body">

                    <div class="scroll-tree">

                        <div class="list-group" ng-repeat="item in items" >
                          <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">GPU</th>
                                  <th scope="col">MEMORY</th>
                                  <th scope="col">CUDA CORES</th>
                                  <th scope="col">TENSOR CORES</th>
                                  <th scope="col">RT CORES</th>
                                  <th scope="col">VR READY</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">RTX 5000</th>
                                  <td>16 GB GDDR6</td>
                                  <td>3072</td>
                                  <td>384</td>
                                  <td>48</td>
                                  <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                </tr>





                              </tbody>
                            </table>
                        </div>

                      </div>
              </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                      </div>
                      </div>
                    </div>
                  </div>


          </div>
  </div>-->



  <!--    <div class="row">

            <div class="col-md-4">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal7">
                <img src="images/c7.jpg" width="100%" height="100%" alt="">
                  </button>


                  <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="modal7" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                      <div class="scroll-tree">

                          <div class="list-group" ng-repeat="item in items" >

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Dell Precision 7540</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Dell Precision 5540</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#perfilextra" role="tab" aria-controls="contact" aria-selected="false">Dell Precision 3541</a>
                                  </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="home3" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table table-dark">
                                      <thead>
                                        <tr>
                                          <th scope="col">GPU</th>
                                          <th scope="col">MEMORY</th>
                                          <th scope="col">CUDA CORES</th>
                                          <th scope="col">TENSOR CORES</th>
                                          <th scope="col">RT CORES</th>
                                          <th scope="col">VR READY</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">RTX 3000</th>
                                          <td>6 GB GDDR6</td>
                                          <td>2304</td>
                                          <td>288</td>
                                          <td>36</td>
                                          <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                        </tr>
                                        <tr>
                                          <th scope="row">T 2000</th>
                                          <td>4 GB GDDR5</td>
                                          <td>1024</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>

                                        </tr>
                                        <tr>
                                          <th scope="row">T100</th>
                                          <td>4 GB GDDR5</td>
                                          <td>768</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>

                                        </tr>

                                      </tbody>

                            </table>
                          </div>
                                  <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab">

                                    <table class="table table-dark">
                                      <thead>
                                        <tr>
                                          <th scope="col">GPU</th>
                                          <th scope="col">MEMORY</th>
                                          <th scope="col">CUDA CORES</th>
                                          <th scope="col">TENSOR CORES</th>
                                          <th scope="col">RT CORES</th>
                                          <th scope="col">VR READY</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">RTX 3000</th>
                                          <td>4 GB GDDR5</td>
                                          <td>1204</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>



                                        </tr>
                                        <tr>
                                          <th scope="row">T2000</th>
                                          <td>4 GB GDDR5</td>
                                          <td>768</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>

                                        </tr>


                                      </tbody>
                            </table>

                                  </div>
                                  <div class="tab-pane fade" id="perfilextra" role="tabpanel" aria-labelledby="contact-tab">


                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">GPU</th>
                                  <th scope="col">MEMORY</th>
                                  <th scope="col">CUDA CORES</th>
                                  <th scope="col">TENSOR CORES</th>
                                  <th scope="col">RT CORES</th>
                                  <th scope="col">VR READY</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">P620</th>
                                  <td>5 GB GDDR5</td>
                                  <td>512</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>



                                </tr>



                              </tbody>

                            </table>
                                  </div>
                                </div>


                          </div>

                        </div>
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                        </div>
                      </div>
                    </div>


            </div>


            <div class="col-md-4">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal8">
                <img src="images/c8.jpg" width="100%" height="100%" alt="">
                  </button>


                  <div class="modal fade" id="modal8" tabindex="-1" role="dialog" aria-labelledby="modal8" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                      <div class="scroll-tree">

                          <div class="list-group" ng-repeat="item in items" >

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">HP ZBook 15 G6</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">HP ZBook 15V</a>
                                  </li>


                                </ul>
                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="home4" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table table-dark">
                                      <thead>
                                        <tr>
                                          <th scope="col">GPU</th>
                                          <th scope="col">MEMORY</th>
                                          <th scope="col">CUDA CORES</th>
                                          <th scope="col">TENSOR CORES</th>
                                          <th scope="col">RT CORES</th>
                                          <th scope="col">VR READY</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">RTX 3000</th>
                                          <td>6 GB GDDR6</td>
                                          <td>2304</td>
                                          <td>288</td>
                                          <td>36</td>
                                          <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                        </tr>
                                        <tr>
                                          <th scope="row">T2000</th>
                                          <td>4 GB GDDR5</td>
                                          <td>1024</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>

                                        </tr>
                                        <tr>
                                          <th scope="row">T100</th>
                                          <td>4 GB GDDR5</td>
                                          <td>768</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>

                                        </tr>

                                      </tbody>

                            </table>
                          </div>
                                  <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab">

                                    <table class="table table-dark">
                                      <thead>
                                        <tr>
                                          <th scope="col">GPU</th>
                                          <th scope="col">MEMORY</th>
                                          <th scope="col">CUDA CORES</th>
                                          <th scope="col">TENSOR CORES</th>
                                          <th scope="col">RT CORES</th>
                                          <th scope="col">VR READY</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">P620</th>
                                          <td>4 GB GDDR5</td>
                                          <td>512</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>



                                        </tr>



                                      </tbody>
                            </table>

                                  </div>

                                </div>


                          </div>

                        </div>
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                        </div>
                      </div>
                    </div>


            </div>


            <div class="col-md-4">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal9">
                <img src="images/c9.jpg" width="100%" height="100%" alt="">
                  </button>


                  <div class="modal fade" id="modal9" tabindex="-1" role="dialog" aria-labelledby="modal9" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                      <div class="scroll-tree">

                          <div class="list-group" ng-repeat="item in items" >

                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home5" role="tab" aria-controls="home" aria-selected="true">LENOVO P53</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile" aria-selected="false">LENOVO P1</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#perfilextra2" role="tab" aria-controls="contact" aria-selected="false">LENOVO P53S</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#perfilextra3" role="tab" aria-controls="contact" aria-selected="false">LENOVO P43S</a>
                                  </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active" id="home5" role="tabpanel" aria-labelledby="home-tab">
                                    <table class="table table-dark">
                                      <thead>
                                        <tr>
                                          <th scope="col">GPU</th>
                                          <th scope="col">MEMORY</th>
                                          <th scope="col">CUDA CORES</th>
                                          <th scope="col">TENSOR CORES</th>
                                          <th scope="col">RT CORES</th>
                                          <th scope="col">VR READY</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">RTX 5000</th>
                                          <td>16 GB GDDR6</td>
                                          <td>3074</td>
                                          <td>384</td>
                                          <td>48</td>
                                          <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                        </tr>
                                        <tr>
                                          <th scope="row">RTX 4000</th>
                                          <td>8 GB GDDR6</td>
                                          <td>2560</td>
                                          <td>320</td>
                                          <td>40</td>
                                          <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>

                                        </tr>
                                        <tr>
                                          <th scope="row">RTX 3000</th>
                                          <td>6 GB GDDR6</td>
                                          <td>2304</td>
                                          <td>288</td>
                                          <td>36</td>
                                          <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>

                                        </tr>

                                        <tr>
                                          <th scope="row">T2000</th>
                                          <td>4 GB GDDR5</td>
                                          <td>1204</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>

                                        </tr>

                                        <tr>
                                          <th scope="row">T1000</th>
                                          <td>4 GB GDDR5</td>
                                          <td>768</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>

                                        </tr>


                                      </tbody>

                            </table>
                          </div>
                                  <div class="tab-pane fade" id="profile5" role="tabpanel" aria-labelledby="profile-tab">

                                    <table class="table table-dark">
                                      <thead>
                                        <tr>
                                          <th scope="col">GPU</th>
                                          <th scope="col">MEMORY</th>
                                          <th scope="col">CUDA CORES</th>
                                          <th scope="col">TENSOR CORES</th>
                                          <th scope="col">RT CORES</th>
                                          <th scope="col">VR READY</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <th scope="row">T2000</th>
                                          <td>4 GB GDDR5</td>
                                          <td>1204</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td>-</td>



                                        </tr>
                                        <tr>
                                          <th scope="row">T1000</th>
                                          <td>4 GB GDDR5</td>
                                          <td>768</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td></td>

                                        </tr>

                                        <tr>
                                          <th scope="row">P620</th>
                                          <td>4 GB GDDR5</td>
                                          <td>512</td>
                                          <td>-</td>
                                          <td>-</td>
                                          <td></td>

                                        </tr>


                                      </tbody>
                            </table>

                                  </div>
                                  <div class="tab-pane fade" id="perfilextra2" role="tabpanel" aria-labelledby="contact-tab">


                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">GPU</th>
                                  <th scope="col">MEMORY</th>
                                  <th scope="col">CUDA CORES</th>
                                  <th scope="col">TENSOR CORES</th>
                                  <th scope="col">RT CORES</th>
                                  <th scope="col">VR READY</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">P520</th>
                                  <td>2 GB GDDR5</td>
                                  <td>384</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>



                                </tr>



                              </tbody>

                            </table>
                                  </div>


                                  <div class="tab-pane fade" id="perfilextra3" role="tabpanel" aria-labelledby="contact-tab">


                            <table class="table table-dark">
                              <thead>
                                <tr>
                                  <th scope="col">GPU</th>
                                  <th scope="col">MEMORY</th>
                                  <th scope="col">CUDA CORES</th>
                                  <th scope="col">TENSOR CORES</th>
                                  <th scope="col">RT CORES</th>
                                  <th scope="col">VR READY</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">P520</th>
                                  <td>2 GB GDDR5</td>
                                  <td>384</td>
                                  <td>-</td>
                                  <td>-</td>
                                  <td>-</td>



                                </tr>



                              </tbody>

                            </table>
                                  </div>



                                </div>


                          </div>

                        </div>
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                        </div>
                      </div>
                    </div>


            </div>


            <div class="col-md-4">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal10">
                <img src="images/c10.jpg" width="100%" height="100%" alt="">
                  </button>


                  <div class="modal fade" id="modal10" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">MSI WS65</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                      <div class="scroll-tree">

                          <div class="list-group" ng-repeat="item in items" >
                            <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">GPU</th>
                                    <th scope="col">MEMORY</th>
                                    <th scope="col">CUDA CORES</th>
                                    <th scope="col">TENSOR CORES</th>
                                    <th scope="col">RT CORES</th>
                                    <th scope="col">VR READY</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">RTX 5000</th>
                                    <td>16 GB GDDR6</td>
                                    <td>3072</td>
                                    <td>384</td>
                                    <td>48</td>
                                    <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                  </tr>

                                  <tr>
                                    <th scope="row">RTX 4000</th>
                                    <td>8 GB GDDR6</td>
                                    <td>2560</td>
                                    <td>320</td>
                                    <td>40</td>
                                    <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                  </tr>

                                  <tr>
                                    <th scope="row">RTX 3000</th>
                                    <td>6 GB GDDR6</td>
                                    <td>2304</td>
                                    <td>288</td>
                                    <td>36</td>
                                    <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                  </tr>

                                  <tr>
                                    <th scope="row">T2000</th>
                                    <td>4 GB GDDR5</td>
                                    <td>1024</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>



                                  </tr>









                                </tbody>
                              </table>
                          </div>

                        </div>
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                        </div>
                      </div>
                    </div>


            </div>


            <div class="col-md-4">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal11">
                <img src="images/c11.jpg" width="100%" height="100%" alt="">
                  </button>


                  <div class="modal fade" id="modal11" tabindex="-1" role="dialog" aria-labelledby="modal11" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">StudioBook W500</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                      <div class="scroll-tree">

                          <div class="list-group" ng-repeat="item in items" >
                            <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">GPU</th>
                                    <th scope="col">MEMORY</th>
                                    <th scope="col">CUDA CORES</th>
                                    <th scope="col">TENSOR CORES</th>
                                    <th scope="col">RT CORES</th>
                                    <th scope="col">VR READY</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">RTX 5000</th>
                                    <td>16 GB GDDR6</td>
                                    <td>3072</td>
                                    <td>384</td>
                                    <td>48</td>
                                    <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                  </tr>

                                </tbody>
                              </table>
                          </div>

                        </div>
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                        </div>
                      </div>
                    </div>


            </div>



            <div class="col-md-4">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal12">
                <img src="images/c12.jpg" width="100%" height="100%" alt="">
                  </button>


                  <div class="modal fade" id="modal12" tabindex="-1" role="dialog" aria-labelledby="modal12" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ConceptD 7</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                      <div class="scroll-tree">

                          <div class="list-group" ng-repeat="item in items" >
                            <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">GPU</th>
                                    <th scope="col">MEMORY</th>
                                    <th scope="col">CUDA CORES</th>
                                    <th scope="col">TENSOR CORES</th>
                                    <th scope="col">RT CORES</th>
                                    <th scope="col">VR READY</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">RTX 5000</th>
                                    <td>16 GB GDDR6</td>
                                    <td>3072</td>
                                    <td>384</td>
                                    <td>48</td>
                                    <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                  </tr>



                                </tbody>
                              </table>
                          </div>

                        </div>
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                        </div>
                      </div>
                    </div>


            </div>

            <div class="col-md-4">

            </div>

            <div class="col-md-4">
              <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modal13">
                <img src="images/c13.jpg" width="100%" height="100%" alt="">
                  </button>


                  <div class="modal fade" id="modal13" tabindex="-1" role="dialog" aria-labelledby="modal13" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Blade 15</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">

                      <div class="scroll-tree">

                          <div class="list-group" ng-repeat="item in items" >
                            <table class="table table-dark">
                                <thead>
                                  <tr>
                                    <th scope="col">GPU</th>
                                    <th scope="col">MEMORY</th>
                                    <th scope="col">CUDA CORES</th>
                                    <th scope="col">TENSOR CORES</th>
                                    <th scope="col">RT CORES</th>
                                    <th scope="col">VR READY</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">RTX 5000</th>
                                    <td>16 GB GDDR6</td>
                                    <td>3072</td>
                                    <td>384</td>
                                    <td>48</td>
                                    <td><img src="images/nvidia-ia.svg"  width="80" height="80" alt=""></td>



                                  </tr>

                                </tbody>
                              </table>
                          </div>

                        </div>
                </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                        </div>
                        </div>
                      </div>
                    </div>


            </div>

    </div>-->

        </div>

        </div>


              </div>
























              <footer id="myFooter">
                  <div class="">
                      <div class="row">




                          <div class="col-md-6"  style="text-align:center">
                              <div class="col contacto" >
                                <img class="logo" src="images/eclipse-logo.svg" width="300" height="300" alt="">
                              </div>
                          </div>







                          <div class="col-md-6">

                        <div class="row align-items-center" style="margin-left: auto !important; margin-right: auto !important;">
                          <div class="col contacto" >
                            <div class="texto1">
                              <h5>Contacto</h5>
                              <ul>
                                <h6><i class="fa fa-envelope" aria-hidden="true"></i> contacto@eclipsemex.com</h6>
                                <h6><i class="fa fa-envelope" aria-hidden="true"></i> samuel.mejia@eclipsemex.mx</h6>
                                  <h6><i class="fa fa-phone" aria-hidden="true"></i> 55 5532.2480</h6>
                                  <h6><i class="fa fa-phone" aria-hidden="true"></i> 55 3685.2090</h6>


                              </ul>
                            </div>
                          </div>

                          </div>

                        </div>
              </footer>

  </body>



  <script src="js/bootstrap.js" charset="utf-8"></script>







  <script>
    function enviarBtn(){
        var nombre=document.getElementById('nombre').value;
        var apellidos=document.getElementById('apellidos').value;
        var empresa=document.getElementById('empresa').value;
        var telefono=document.getElementById('telefono').value;
        var correo=document.getElementById('correo').value;
        var pais=document.getElementById('pais').value;
        var comentarios=document.getElementById('comentarios').value;
        var oculto=document.getElementById('oculto').value;
        console.log("Nom: " + nombre);
        console.log("Ap: " + apellidos);
        if (nombre=="" || apellidos=="" || empresa=="" || correo=="" || comentarios=="") {
            alert("Llenar los campos requeridos");
            console.log("Llenar los campos requeridos");
        } else{
          /*$.ajax({
              url: 'ingresarDatos.php',
              type: 'POST',
              data: {
                  nombre: nombre,
                  apellidos: apellidos,
                  empresa: empresa,
                  telefono: telefono,
                  correo: correo,
                  pais: pais,
                  comentarios: comentarios,
                  oculto: oculto
              },
              async:false,
              success: function(msg) {
                alert('Registro enviado.');
                window.location.replace("https://www.eclipsemex.com");
              }
          });*/
        }
    }
  </script>
</html>
