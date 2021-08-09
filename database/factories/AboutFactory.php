<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'main'=> 'La Comisión Fílmica de Huatulco, opera bajo un convenio de colaboración con "Oaxaca Manos de Ayuda A.C.". Está integrada por un grupo de profesionales en el medio audiovisual que pone al servicio de creadores locales y de productores audiovisuales de México y el mundo, todo lo necesario para rodar en el municipio de Santa María Huatulco: contactos institucionales, guías especializadas para el productor, asesoría para utilizar los incentivos destinados a la industria fílmica, atención profesional y especializada. Además, se presenta como una plataforma de diálogo abierto ante la población, en donde se abordan los aspectos de la industria audiovisual para motivar la creación local.', 
            'mision'=>'Fomentar la creación y producción local audiovisual, implementando estrategias de capacitación y
            divulgación
            que acerquen a nuevos sectores de la población a los bienes culturales fílmicos.    Fortalecer y generar nuevos vínculos institucionales, además de garantizar una mayor cobertura de las
            actividades
            que realiza el gremio especializado y la población en general.    Difundir las características naturales y humanas de Santa María Huatulco en el sector fílmico, para
            consolidar
            la presencia del Municipio en el ámbito nacional e internacional, como destino ideal para el rodaje de
            material
            audiovisual.' ,
            'goal'=> '                   Contribuir al fortalecimiento del tejido social a través de actividades de carácter audiovisual.
            
                Facilitar los trámites para el uso de espacios públicos durante el rodaje de películas, series de televisión, comerciales y otras obras audiovisuales.
            
                Definir y promocionar la oferta de servicios audiovisuales del Municipio como son las locaciones, laboratorios, estudios, intermediación logística en hotelería, alimentación, transportes, suministro de equipos, profesionalización del personal artístico y técnico, asesoría en contrataciones y pagos y, gestión de permisos y licencias e incentivos fiscales. Todo ello con el fin de generar más empleos y atraer mayor inversión nacional y extranjera.',
            'local'=> '  <li>Apoyar y fomentar la creación fílmica local. </li>
            <li>Colaborar en la elaboración de proyectos susceptibles de apoyo financiero.</li>
            <li>Colaborar en la gestión de recursos financieros, materiales y administrativos.</li>
            <li>Promover talleres, cursos, concursos y diplomados.</li>
            <li>Crear y realizar un Concurso a la Creatividad Fílmica.</li>
            <li>Crear y realizar un Festival Itinerante local.</li>
            <li>Consolidar la realización de los Festivales Cinematográficos existentes.</li>
            <li>Crear el Archivo Histórico Audiovisual Digital.</li>',
            'exterior'=> '     <li>Promocionar a Huatulco como destino fílmico. </li>
            <li>Elaborar material documental y promocional del Municipio.</li>
            <li>Crear el Directorio de Proveedores: Audiovisual y de Servicios.</li>
            <li>Establecer convenios de colaboración.</li>
            <li>Lograr incentivos para la Industria Fílmica.</li>',
            'difusion'=> '          En el ámbito nacional e internacional, la promoción a través de:
                        
                Programas de televisión y radio, Catálogos, Prensa escrita, Revistas especializadas,           Salas de cine, La Red Nacional de Exhibición Cultural Cinematográfica, Festivales y           mercados Ciclos, Muestras y Retrospectivas, Exposiciones, Ferias del libro, Premieres,       TV por cable, TV abierta y Recursos multimedia: portales y redes sociales. '
 
       
        ];
    }
}
