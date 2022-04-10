<?php

    require 'connection.php';
    include 'hotel.php';
    include 'apartment.php';

    //si el input no tiene valor
    if(isset($_POST['inputEmpty'])){
        //realizamos la consulta en base a el valor del input
        $sql = 'SELECT * FROM hoteles';

        $htmlHotels = '<h3 class="titleSugest">HOTELES</h3>';

        if($res = $con->query($sql)){
            while($fetch = $res->fetch_object()){
                //creamos un hotel por cada resultado en la busqueda
                $hotel = new Hotel();
                $hotel->setName($fetch->nombre);
                $hotel->setStars($fetch->estrellas);
                $hotel->setType($fetch->tipo);
                $hotel->setCity($fetch->ciudad);
                $hotel->setProvince($fetch->provincia);

                $htmlHotels .= '<div class="container divSuggest">';
                $htmlHotels .= '  <div id="'.$fetch->id.'" class="row">';
                $htmlHotels .= '      <h4>'.$hotel->name.'</h4>';
                $htmlHotels .= '  </div>';
                $htmlHotels .= '  <div class="row">';
                $htmlHotels .= '      <p>'.$hotel->stars.' estrellas | '.$hotel->type.' | '.utf8_encode($hotel->city).' | '.utf8_encode($hotel->province).'</p>';
                $htmlHotels .= '  </div>';
                $htmlHotels .= '</div>';
            }

            echo $htmlHotels;
        }

        $sqlApartments = 'SELECT * FROM apartamentos';

        $htmlApartments = '<h3 class="titleSugest">APARTAMENTOS</h3>';

        if($res = $con->query($sqlApartments)){
            while($fetch = $res->fetch_object()){
                //creamos un apartamento por cada resultado en la busqueda
                $aprtmnt = new Apartment();
                $aprtmnt->setName($fetch->nombre);
                $aprtmnt->setAvailable($fetch->disponible);
                $aprtmnt->setAdults($fetch->n_adultos);
                $aprtmnt->setCity($fetch->ciudad);
                $aprtmnt->setProvince($fetch->provincia);

                $htmlApartments .= '<div class="container divSuggest">';
                $htmlApartments .= '  <div class="row">';
                $htmlApartments .= '      <h4>'.$aprtmnt->name.'</h4>';
                $htmlApartments .= '  </div>';
                $htmlApartments .= '  <div class="row">';
                $htmlApartments .= '      <p>'.$aprtmnt->available.' disponibles | '.$aprtmnt->adults.' adultos | '.utf8_encode($aprtmnt->city).' | '.utf8_encode($aprtmnt->province).'</p>';
                $htmlApartments .= '  </div>';
                $htmlApartments .= '</div>';
            }

            echo $htmlApartments;
        }
    }

    //si hay valor en el input
    if(isset($_POST['inputKeyup'])){
        //recogemos el valor del input para realizar la consulta
        $inputText = $_POST['inputText'];
        //realizamos la consulta en base a el valor del input
        $sql = 'SELECT * FROM hoteles WHERE nombre LIKE "%'.$inputText.'%" OR ciudad LIKE "%'.$inputText.'%" OR provincia LIKE "%'.$inputText.'%"';

        $htmlHotels = '<h3 class="titleSuges">HOTELES</h3>';

        if($res = $con->query($sql)){
            while($fetch = $res->fetch_object()){
                //creamos un hotel por cada resultado en la busqueda
                $hotel = new Hotel();
                $hotel->setName($fetch->nombre);
                $hotel->setStars($fetch->estrellas);
                $hotel->setType($fetch->tipo);
                $hotel->setCity($fetch->ciudad);
                $hotel->setProvince($fetch->provincia);

                $htmlHotels .= '<div class="container divSuggest">';
                $htmlHotels .= '  <div id="'.$fetch->id.'" class="row">';
                $htmlHotels .= '      <h4>'.$hotel->name.'</h4>';
                $htmlHotels .= '  </div>';
                $htmlHotels .= '  <div class="row">';
                $htmlHotels .= '      <p>'.$hotel->stars.' estrellas | '.$hotel->type.' | '.utf8_encode($hotel->city).' | '.utf8_encode($hotel->province).'</p>';
                $htmlHotels .= '  </div>';
                $htmlHotels .= '</div>';
            }

            echo $htmlHotels;
        }

        $sqlApartments = 'SELECT * FROM apartamentos WHERE nombre LIKE "%'.$inputText.'%" OR ciudad LIKE "%'.$inputText.'%" OR provincia LIKE "%'.$inputText.'%"';

        $htmlApartments = '<h3 class="titleSugest">APARTAMENTOS</h3>';

        if($res = $con->query($sqlApartments)){
            while($fetch = $res->fetch_object()){
                //creamos un apartamento por cada resultado en la busqueda
                $aprtmnt = new Apartment();
                $aprtmnt->setName($fetch->nombre);
                $aprtmnt->setAvailable($fetch->disponible);
                $aprtmnt->setAdults($fetch->n_adultos);
                $aprtmnt->setCity($fetch->ciudad);
                $aprtmnt->setProvince($fetch->provincia);

                $htmlApartments .= '<div class="container divSuggest">';
                $htmlApartments .= '  <div class="row">';
                $htmlApartments .= '      <h4>'.$aprtmnt->name.'</h4>';
                $htmlApartments .= '  </div>';
                $htmlApartments .= '  <div class="row">';
                $htmlApartments .= '      <p>'.$aprtmnt->available.' disponibles | '.$aprtmnt->adults.' adultos | '.utf8_encode($aprtmnt->city).' | '.utf8_encode($aprtmnt->province).'</p>';
                $htmlApartments .= '  </div>';
                $htmlApartments .= '</div>';
            }

            echo $htmlApartments;
        }
    }

?>