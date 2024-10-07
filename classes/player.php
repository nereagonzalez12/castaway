<?php

declare(strict_types=1);

class Player
{
    public function __construct(
        private string $name,
        private int $food,
        private int $water,
        private int $energy,
        private int $day,
    ) {}

    public static function create_player(string $name): Player
    {
        return new self($name, 3, 3, 5, 1);
    }


    public function get_data()
    {
        return get_object_vars($this);
    }

    // Player actions
    public function search_food(): array
    {

        // Random number
        $randomNumber = rand(1, 10);

        switch ($randomNumber) {
            case 1:
                $response = 'Te adentras en la frondosa jungla en busca de algo que llevarte a la boca. Tus 
                sentidos no son demasiado agudos, ya que el 50% de tu capacidad de tención la perdiste usando TikTok, por lo 
                que te distraes caminando y caes en un hoyo lleno de barro húmedo y lo que posiblemente sean heces de algún
                animal. Con el edor y la suciedad tardas en darte cuenta, pero finalmente descubres que has aplastado con el 
                culo unos plátanos que había en el hoyo caídos de un arbol. Aún se pueden comer, aunque están llenos de 
                heces... -- +1 comida, -1 energía';

                $this->food++;
                $this->energy--;

                break;
            case 2:
                $response = 'Decides buscar alguna concha fácil de abrir por la orilla, ya que no tienes ni 
                fuerza ni agallas para adentrarte en la maleza. Caminando por la playa, debido a las cantidades ingentes de 
                Carolina Herrera que llevas encima, desorientas a las gaviotas que volaban a baja altura y enfilan a 
                atacarte. Consigues librarte de ellas con los movimientos estridentes de tus gelatinosos brazos y las 
                espantas, haciendo que escupan sobre ti los restos de comida que estaban transportando en sus picos. Estás 
                lleno de tripas de epscado, pero al menos ya no tienes hambre... -- +1 comida, -2 energía.';

                $this->food++;
                $this->energy -= 2;
                break;
            case 3:
                $response = 'Armado con una rama afilada que encontraste en la arena, decides cazar algún pequeño 
                animal. Tras varias horas de acecho (y fingir que sabes lo que haces), logras acorralar un lagarto que, 
                desafortunadamente, te muerde el dedo del pie antes de huir entre los matorrales. Dolido y humillado, 
                decides comerte unas moras que encontraste cerca... aunque su color extraño no te da mucha confianza -- 
                +1 comida, -2 energía.';

                $this->food++;
                $this->energy -= 2;
                break;
            case 4:
                $response = 'Decides probar suerte pescando en la orilla con una lanza improvisada hecha de un palo 
                y un cuchillo oxidado que encontraste en la playa, como hacías en The Forest. Tras 45 minutos de mojarte 
                los pies sin atrapar nada (obviamente, qué te creías que era esto), una ola te tira al suelo. 
                Te levantas cubierto de arena y frustración y con el pantalon ligeramente hinchado. Es un pez, no te 
                motives -- +2 comida, -1 energía.';

                $this->food += 2;
                $this->energy--;
                break;
            case 5:
                $response = 'Ves un árbol lleno de frutos exóticos, pero están tan altos que decides trepar. Al 
                subir dos metros y descubrir que para repar se requiere de una fuerza que jamás imaginaste, te resbalas 
                y caes al suelo, aplastando una pequeña serpiente que dormía a la sombra. 
                Antes de que puedas reaccionar, el árbol lanza uno de sus frutos directo a tu cabeza, como si la 
                naturaleza se vengara. Al menos tienes algo que comer, aunque tu fobia a las serpientes no te dejará
                pegar ojo nunca más -- +2 comida, -1 energía.';

                $this->food += 2;
                $this->energy--;
                break;
            case 6:
                $response = 'Te aventuras a buscar algo en la selva con tu última botella de agua. De repente, 
                encuentras un arbusto lleno de frutos. Sin pensarlo, devoras varios de ellos solo para descubrir, 
                momentos después, que no eran comestibles. Corres desesperadamente hacia el río para beber agua y 
                calmar el ardor en tu boca. Sobrevives, pero la diarrea explosiva que tienes te vacía por dentro -- 
                -1 agua, -1 comida, -2 energía.';

                $this->food--;
                $this->water--;
                $this->energy -= 2;
                break;
            case 7:
                $response = 'Exploras la selva y encuentras una planta con hojas grandes que parecen deliciosas. 
                Decides probar una, pero tus papilas gustativas no están acostumbradas (no has probado una lechuga ni 
                una vez en tu vida ) y esta te parece extremadamente amarga. Mientras escupes la hoja y pones cara de
                indignación, ves cómo una cabra te observa desde lo alto de una roca, con una mirada de superioridad
                que dificilmente olvidarás. No tienes fuerzas para cazarla, así que acabas masticando otro puñado de 
                hojas amargas, pero esta vez con menos quejas -- +1 comida, -1 energía.';

                $this->food++;
                $this->energy--;
                break;
            case 8:
                $response = 'Te está entrando mucha sed y el calor está haciéndote sudar hasta la última gota de 
                líquido de tu cuerpo. Recuerdas ese capítulo del Último Superviviente, en el que el tío
                calma su sed bebiendo su propia orina desde la piel mudada de una serpiente. A duras penas intentas 
                orinar dentro de una pequeña bolsa de plástico que había en el mar (para pensar), y haciendo acopio de 
                toda tu valentía de lo bebes. Nunca sabrás si ha funcionado, pero puedes estar seguro de que los animales
                salvajes no intentarán comerte por el asco que das -- +1 agua, -1 energía.';

                $this->water++;
                $this->energy--;
                break;
            case 9:
                $response = 'Te sientes fuerte y decidido. avanzas con paso firme por un frondoso camino, esquivando 
                grandes hojas y lianas. Al fin consigues vislumbrar la luz del sol al final del camino. Un precioso
                oasis se descubre ante ti tras la maleza. Un agua cristalina y un centenar de arboles de fruta fresca
                se presentan ante ti, sin ningún peligro a la vista. Tienes sustento para sobrevivir más de un año sin
                preocupaciones y... Despiertas... Te habías desmayado hace media hora de un golpe de calor, has estado
                revolcándote en fango y teniendo espasmos musculares debido a tu sueño. Le has dado tantísima pena a un 
                mono, que te ha dejado unas frutas y algo de agua por si sobrevivías al mal viaje -- +1 agua, +1 comida, 
                +1 energía.';

                $this->food++;
                $this->water++;
                $this->energy++;
                break;
            case 10:
                $response = 'Mientras exploras un área con mucha vegetación, encuentras un nido de pájaros. Con cuidado, 
                logras atrapar uno de ellos para tu comida. Un gran aporte a tu dieta, pero un duro golpe para tu ética 
                y moral, solo eran unos niños... -- -1 agua, +4 comida, -2 energía';

                $this->food += 4;
                $this->water--;
                $this->energy -= 2;
                break;
        }
        $this->day++;
        return [$this, $response];
    }

    public function rest(): array
    {
        // Random number
        $randomNumber = rand(1, 10);

        switch ($randomNumber) {
            case 1:
                $response = 'Estabas tan agotado de pegar gritos de ayuda durante todo el día, que has dormido como un 
                tronco -- -1 agua, -1 comida, +3 energía';

                $this->food--;
                $this->water--;
                $this->energy += 3;
                break;
            case 2:
                $response = 'Unas hormigas han estado toda la noche intentando usar tu ombligo como nueva madriguera, no 
                has descansado demasiado -- -1 agua, -1 comida, +1 energía';

                $this->food--;
                $this->water--;
                $this->energy++;
                break;
            case 3:
                $response = 'Tu estómago no ha reaccionado muy bien al agua de mar que intentaste beber... te has cagado 
                encima durante la noche... lo que ha favorecido a que durmieras calentito y ningún depredador se acercara
                -- -1 agua, -1 comida, +2 energía';

                $this->food--;
                $this->water--;
                $this->energy += 2;
                break;
            case 4:
                $response = 'Te has pasado toda la noche llorando... por la impotencia de saber que te perderás la salida
                del GTA VI, has perdido bastante líquido -- -2 agua, -1 comida, +1 energía';

                $this->food--;
                $this->water -= 2;
                $this->energy++;
                break;
            case 5:
                $response = 'Has sido acechado por jabalíes durante la noche, pero te han visto tan sucio y 
                huesudo que te han confundido con un cadaver en descomposición y no te han molestado -- -1 agua, 
                -1 comida, +2 energía';

                $this->food--;
                $this->water--;
                $this->energy += 2;
                break;
            case 6:
                $response = 'No ha pasado nada especial... no siempre vas a tener mala suerte, espabila -- -1 agua, 
                -1 comida, +2 energía';

                $this->food--;
                $this->water--;
                $this->energy += 2;
                break;
            case 7:
                $response = 'Has encontrado un escondite perfecto para poder descarsar sin que te entre la luz del día
                por las mañanas y te despierte, una cueva acogedora y escondida de posibles depredadores de la 
                superficie, por fín algo sale bien... Por cierto, un helicóptero de rescate ha pasado esta mañana por
                la isla, como no estabas en la superficie ni has dejado rastro, han pasado de largo descartando la 
                posibilidad de que hubiera alguien -- -1 agua, -1 comida, +2 energía';

                $this->food--;
                $this->water--;
                $this->energy += 2;
                break;
            case 8:
                $response = 'Te has pasado la noche soñando con el menú McAitana que tanto te gustaba, pero al despertar, la 
                realidad te ha hundido. El hambre te está empezando a afectar seriamente -- -1 agua, -2 comida, +1 energía';

                $this->food -= 2;
                $this->water--;
                $this->energy++;

                break;
            case 9:
                $response = 'Durante la noche, una tormenta azotó la isla. Aunque conseguiste refugiarte, pasaste horas 
                peleando para que no se volara tu precario techo. No has recuperado energía -- -1 agua, -1 comida, +0 energía';

                $this->food--;
                $this->water--;
                $this->energy += 0;
                break;
            case 10:
                $response = 'Encuentras un pequeño claro en el bosque donde decides descansar. La tranquilidad te 
                permite recuperar energía, aunque la falta de agua te hace sentir un poco débil -- -1 agua, +3 energía, 
                -1 comida';

                $this->water--;
                $this->energy += 3;
                $this->food--;
                break;
        }
        $this->day++;
        return [$this, $response];
    }


    public function explore(): array
    {

        // Random number
        $randomNumber = rand(1, 20);

        switch ($randomNumber) {
            case 1:
                $response = 'Has encontrado un pequeño arroyo de agua dulce. Bebes hasta saciarte y llenas tu 
                cantimplora -- +3 agua, -1 comida, -2 energía';

                $this->water += 3;
                $this->food--;
                $this->energy -= 2;

                break;

            case 2:
                $response = 'Te has topado con un arbusto de bayas comestibles. Son pocas, pero te sacian un poco -- 
                -1 agua, +2 comida, -1 energía';

                $this->food += 2;
                $this->water--;
                $this->energy--;

                break;

            case 3:
                $response = 'Has caminado durante horas bajo el sol abrasador sin encontrar nada útil. La sed empieza 
                a ser insoportable -- -3 agua, -1 comida, -3 energía';

                $this->water -= 3;
                $this->food--;
                $this->energy -= 3;

                break;

            case 4:
                $response = 'Tropiezas y te caes por una ladera rocosa. Te raspas las rodillas y haces un mundo de ello. e
                Estás agotado y más sediento que nunca -- -2 agua, -1 comida, -3 energía';

                $this->water -= 2;
                $this->food--;
                $this->energy -= 3;

                break;

            case 5:
                $response = 'Te encuentras un pequeño lago de agua estancada. Aunque no te fías mucho, decides beber. 
                Esperas que no te pase nada malo -- +2 agua, -1 comida, -2 energía';

                $this->water += 2;
                $this->food--;
                $this->energy -= 2;

                break;

            case 6:
                $response = 'Después de caminar sin rumbo, encuentras unos cocos. Después de tres hroas los consigues
                abrir y te bebes el agua, además de comer la pulpa, cosa que te ha dado mucho asco -- +2 agua, 
                +2 comida, -1 energía';

                $this->water += 2;
                $this->food += 2;
                $this->energy -= 1;

                break;

            case 7:
                $response = 'Te has desviado y te has perdido en un denso manglar. Has tenido que hacer un esfuerzo 
                titánico para salir, agotado y con poca agua -- -2 agua, -1 comida, -3 energía';

                $this->water -= 2;
                $this->food--;
                $this->energy -= 3;

                break;

            case 8:
                $response = 'Has encontrado el cadáver de un animal en descomposición. Aunque el hedor es insoportable, 
                logras aprovechar algo de carne aún comestible. Te sientes sucio... -- -1 agua, +3 comida, -2 energía';

                $this->food += 3;
                $this->energy -= 2;
                $this->water--;

                break;

            case 9:
                $response = 'Un grupo de pequeños cangrejos ha aparecido en la playa. Atrapas varios, lo cual te 
                proporcionará algo de comida para la noche -- -1 agua, +2 comida, -1 energía';

                $this->food += 2;
                $this->water--;
                $this->energy--;

                break;

            case 10:
                $response = 'Después de un largo día sin éxito, descubres un antiguo refugio abandonado. Encuentras algo 
                de comida enlatada, lo que te anima un poco. Pero descubres que dentro del refugio hay jaulas sucias
                y sangre seca por todas partes. También unos utensilios afilados y unas carpetas que no te atreves
                a abrir. Sales de alli corriendo... -- -2 agua, +2 comida, -2 energía';

                $this->food += 2;
                $this->water -= 2;
                $this->energy -= 2;

                break;

            case 11:
                $response = 'Has trepado a una colina rocosa en busca de una mejor vista, pero el esfuerzo te ha dejado 
                completamente exhausto y sin encontrar nada útil -- -2 agua, -1 comida, -3 energía';

                $this->water -= 2;
                $this->food--;
                $this->energy -= 3;

                break;

            case 12:
                $response = 'Encuentras una cueva profunda y misteriosa. Dentro descubres unas setas comestibles que te 
                servirán para aguantar un poco más -- -1 agua, +2 comida, -2 energía';

                $this->food += 2;
                $this->water--;
                $this->energy -= 2;

                break;

            case 13:
                $response = 'Durante tu exploración te has cortado con una roca afilada. Aunque no es grave, el dolor te 
                marea y te hace beber más agua -- -2 agua, -1 comida, -3 energía';

                $this->water -= 2;
                $this->food--;
                $this->energy -= 2;

                break;

            case 14:
                $response = 'Te has acercado demasiado a una colonia de abejas. Para tu sorpresa, no te han picado, 
                pero sí has logrado robar un poco de miel antes de huir -- +2 comida, -1 agua, -1 energía';

                $this->food += 2;
                $this->water--;
                $this->energy--;

                break;

            case 15:
                $response = 'Has seguido un rastro de animales esperando cazar algo, pero tras varias horas de esfuerzo, 
                no conseguiste nada. La fauna y flora te están vacilando constantemente -- -1 agua, -2 comida, -2 energía';

                $this->water--;
                $this->food -= 2;
                $this->energy -= 2;

                break;

            case 16:
                $response = 'Encontraste una playa con restos de un naufragio. Entre la madera y los escombros, 
                encuentras algunas provisiones útiles que te ayudarán un poco. También ves una pelota de voley con unas 
                manchas rojas, pero estás tan impaciente por comer que sales de allí sin hacerle mucho caso -- +2 agua, +2 comida, -2 energía';

                $this->food += 2;
                $this->water += 2;
                $this->energy -= 2;

                break;

            case 17:
                $response = 'Te has cruzado con una zona de piedras resbaladizas y caíste al agua. Estás empapado y 
                agotado, pero al menos bebiste un poco durante la caída -- +1 agua, -1 comida, -3 energía';

                $this->water += 1;
                $this->food--;
                $this->energy -= 2;

                break;

            case 18:
                $response = 'Durante tu caminata, encuentras una pequeña higuera. Logras recoger algunos higos que te 
                proporcionarán energía para seguir adelante -- -1 agua, +2 comida, -1 energía';

                $this->food += 2;
                $this->water--;
                $this->energy--;

                break;

            case 19:
                $response = 'Exploraste la selva durante horas y encontraste unas plantas medicinales que podrían ser 
                útiles más adelante, pero estás agotado -- -2 agua, +0 comida, -3 energía';

                $this->water -= 2;
                $this->energy -= 3;

                break;

            case 20:
                $response = 'Te topas con una fuente de agua fresca que te permite refrescarte y reponer tus fuerzas. 
                Llenas tu cantimplora y te hidratas completamente -- +3 agua, -1 comida, -1 energía';

                $this->water += 3;
                $this->food--;
                $this->energy--;

                break;
        }
        $this->day++;

        return [$this, $response];
    }

    public function search_escape(): array
    {

        $escape = false;

        // Random number
        $randomNumber = rand(1, 10);

        switch ($randomNumber) {
            case 1:
                $response = 'Con mucho esfuerzo, logras construir una balsa rudimentaria. Te lanzas al agua, pero la 
                balsa se rompe y te empapas. Regresas a la playa derrotado -- -1 agua, -2 comida, -3 energía';

                $this->food -= 2;
                $this->water--;
                $this->energy -= 3;

                break;

            case 2:
                $response = 'Tras horas de búsqueda, te topas con una canoa rota en la playa. Decides repararla, pero no 
                logras terminarla, lo dejas a mitad como todo lo que haces... terminas agotado -- -2 comida, -1 agua, -3 energía';

                $this->food -= 2;
                $this->water--;
                $this->energy -= 3;

                break;

            case 3:
                $response = 'Encuentras un viejo faro en una colina. Al entrar, descubres un bote en el interior, 
                ¡pero no tiene combustible! -- -1 agua, -1 comida, +0 energía';

                $this->food--;
                $this->water--;
                $this->energy += 0;

                break;

            case 4:
                $response = 'Con mucha determinación, construyes una balsa improvisada con troncos y lianas. 
                Desafortunadamente, no logras hacerla flotar y te rindes, frustrado y con ganas de llorar -- -1 agua, 
                -2 comida, -2 energía';

                $this->food -= 2;
                $this->water--;
                $this->energy -= 2;

                break;

            case 5:
                $response = 'Decides escalar una montaña en busca de un lugar donde hacer señales. Desde allí, ves un 
                barco a lo lejos, pero no logras que te vean ni oigan. Nunca supiste proyectar la voz... -- -2 agua, 
                -2 comida, -3 energía';

                $this->food -= 2;
                $this->water -= 2;
                $this->energy -= 3;

                break;
            case 6:
                $response = 'Exploras la costa en busca de restos de naufragios y encuentras una botella con un mensaje. 
                Desafortunadamente, está en chino mandarín -- -1 agua, -1 comida, -2 energía';

                $this->food--;
                $this->water--;
                $this->energy -= 2;

                break;
            case 7:
                $response = 'Encuentras un mapa antiguo que indica la ubicación de un poblado cercano. Sin embargo, 
                tras seguirlo, descubres que está desierto -- -1 agua, -1 comida, -3 energía';

                $this->food--;
                $this->water--;
                $this->energy -= 3;

                break;
            case 8:
                $response = 'Decides construir una señal de humo con ramas y hojas secas. Pasas horas recolectando 
                material, pero empieza a llover y el fuego se apaga antes de ser visto -- -1 agua, -2 comida, -2 energía';

                $this->food -= 2;
                $this->water--;
                $this->energy -= 2;

                break;
            case 9:
                $response = 'Tropiezas con un grupo de cangrejos. Te das cuenta de que si los cocinas, podrás atraer la 
                atención de los barcos. Lo logras, pero no aparece nadie -- -1 agua, +2 comida, -2 energía';

                $this->food += 2;
                $this->water--;
                $this->energy -= 2;

                break;
            case 10:
                $response = 'Sales a la playa a hacer un mensaje de SOS con ramas que sea visible desde el cielo. 
                Resulta que tu familia se pasó los últimos meses subiendo vídeos sobre tu desaparición en redes sociales
                y un grupo de recreación de batallas bélicas que usaba la isla como desembarco de Normandía, te reconoció
                de inmediato y te ayudaron a volver a casa... ¡Has escapado!';

                $escape = true;

                break;
        }
        if (!$escape) {
            $this->day++;
        }
        return [$this, $response, $escape];
    }
}
