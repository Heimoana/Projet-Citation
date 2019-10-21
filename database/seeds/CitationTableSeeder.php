<?php

use Illuminate\Database\Seeder;

class CitationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citations')->insert(
            [
                [
                    'citation'=> '"Au bout d`un moment, il est vraiment druide, c`mec-là, ou ça fait quinze ans qu`il me prend pour un con ?"
                    Le roi Arthur'
                ],
                [
                    'citation'=>'"C`que j`dis, tout l`monde s`en tamponne ! Je gueule je gueule, j`pourrai gueuler dans l`cul d`un poney qu`ce s`rait pareil !"
                    Guethenoc'
                ],
                [
                    'citation'=> '"Non mais attendez, je crois qu`on s`est mal compris, là : vous avez une idée du temps qu`il me faut pour tracer une lettre avec ces putains de plumes ?!
                    Père Blaise - Livre I"'
                ],
                [
                    'citation'=> '"Ouais, ben si vous vouliez du captivant, fallait peut-être me faire lire autre chose que des textes de lois !
                    Père Blaise - Livre IV"'
                ],
                [
                    'citation'=> '"J`irai me coucher quand vous m`aurez juré qu`il n`y a pas dans cette forêt d`animal plus dangereux que le lapin adulte !
                    Bohort - Livre I"'
                ],
                [
                    'citation'=> '"Le poisson qui étouffe sur la berge remue plus que celui qui est dans l`eau. C’est bien la preuve de ce que je dis : si on se débat, c’est qu’on est en train de crever.
                    Caius Camillus - Livre III"'
                ],
                [
                    'citation'=> '"Moi, à une époque, je voulais faire vœu de pauvreté (...) Mais avec le pognon que j`rentrais, j`arrivais pas à concilier les deux.
                    Galessin - Livre II"'
                ],
                [
                    'citation'=> '"Par exemple, vous prenez aujourd`hui. Vous comptez sept jours. Ça vous emmène dans une semaine. Et bien on sera exactement le même jour qu’aujourd’hui… À une vache près, hein… C’est pas une science exacte.
                    Karadoc - Livre II"'
                ],
                [
                    'citation'=> '"Tout à l`heure, on a vu que le chapelet de saucisses n`était pas un objet redondant. Et pourtant, on a pu lui trouver une utilisation périmétrique en s’en servant comme un fouet.
                    Karadoc - Livre IV"'
                ],
                [
                    'citation'=> '"Les chiffres, c`est pas une science exacte figurez-vous!
                    Karadoc - Livre V"'
                ],
                [
                    'citation'=> '"Selon Karadoc, un lit n`est pas un lit s`il n`y a pas de quoi manger une semaine dedans sans en sortir.
                    Mevanwi - Livre IV"'
                ]
            ]
        );
    }
}
