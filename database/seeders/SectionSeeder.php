<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Section::create([
            'name' => 'Football',
            'leader' => 'Christophe CASANOVA',
            'leader_phone_number' =>  "06 63 23 97 41",
            'leader_email' => 'christophe.casanova2007@gmail.com',
            'assistant' => 'Serge CARO',
            'assistant_phone_number' => '06 26 62 19 12',
            'day' => 'lundi',
            'start_hour' => '20:00:00',
            'end_hour' => '22:00:00',
            'place' => 'gymnase Marcel Pagnol',
            'city' => 'VALENCE',
            'description' => 'Cette nouvelle section a vu le jour en mars 2018 suite à une rencontre avec Claude Pettmann, président de l’AFP - 
            Carrefour Cultures de Valence et Jean-Paul Taboyan, président de Sport et Foi- Agapé.
            L’association Carrefour Cultures promeut des actions favorisant le contact entre les diverses cultures présentes sur notre territoire.
            Claude Pettmann souligne que beaucoup de jeunes réfugiés, fuyant les situations périlleuses de leur pays, demandent à pratiquer le sport.
            Sous l’impulsion du Président de Sport et Foi – Agape, une équipe de bénévoles s’est greffée au projet, afin qu\'il puisse se réaliser. 
            Une vingtaine de jeunes en provenance d’Afghanistan, du Soudan, d’Erythrée et d’autres pays d’Afrique, composent l’équipe de football. Ils s’entrainent ponctuellement en extérieur ou dans un gymnase.
            Des matches amicaux sont organisés ou bien des tournois et souvent ce sont des opportunités de faire connaitre nos besoins en logistique 
            (Maillots, shorts, chaussures de futsal ou extérieur, chasubles, plots, ballons de futsal et extérieur)
            Toutes personne est la bienvenue pour nous aider : les besoins sont multiples ! Prenez contact avec le Président.'
        ]);

        Section::create([
            'name' => 'Futsal',
            'leader' => 'Wameng LY',
            'leader_phone_number' =>  null,
            'leader_email' => 'wamengly@hotmail.com',
            'assistant' => 'Daniel BOURGEOIS',
            'assistant_phone_number' => '07 81 12 68 54',
            'day' => 'jeudi',
            'start_hour' => '19:00:00',
            'end_hour' => '21:30:00',
            'place' => 'gymnase Marcel Pagnol',
            'city' => 'VALENCE',
            'description' => "L’objectif premier de la section est de se faire plaisir dans le jeu tout en respectant son adversaire. 
            Pendant les collations nous donnons l’occasion aux joueurs d’apprendre à mieux se connaitre, et aux nouveaux de s'intégrer.
            Les membres participent à des tournois dans des lieux variés : centre pénitencier de Valence, matches amicaux sur invitation, ou encore Télethon.
            Pendant l’année, nous organisons deux tournois en interne, afin que les joueurs des deux créneaux puissent se rencontrer.
            Depuis 2008, Arnaud, trisomique est membre : c’est un privilège de l’avoir dans nos effectifs. Une deuxième personne trisomique est arrivée en 2017, 
            Martin, bien intégré également et qui prend du plaisir à jouer en équipe !"
        ]);

        Section::create([
            'name' => 'Badminton',
            'leader' => 'Caroline MANOUKIAN',
            'leader_phone_number' =>  null,
            'leader_email' => 'sportetfoi.agape26@gmail.com',
            'assistant' => null,
            'assistant_phone_number' => null,
            'day' => 'jeudi',
            'start_hour' => '20:00:00',
            'end_hour' => '22:00:00',
            'place' => 'Gymnase Louis Jourdan',
            'city' => 'BOURG-LES-VALENCE',
            'description' =>
            "Depuis novembre 2017 au gymnase Louis jourdan à Bourg-lès-Valence, une nouvelle section badminton a vu le jour!
            Nous désirons faire découvrir ce sport en pleine expansion dans un esprit de convivialité et de partage sans se mettre la pression. 
            Des animateurs et responsables de la section sauront être à votre écoute et vous faire partager leur passion du badminton !    
            Prenez contact avec la responsable pour des informations supplémentaires."
        ]);

        Section::create([
            'name' => 'Volley',
            'leader' => 'Jean-Paul TABOYAN',
            'leader_phone_number' =>  '06 89 66 25 81',
            'leader_email' => null,
            'assistant' => null,
            'assistant_phone_number' => null,
            'day' => 'lundi',
            'start_hour' => '20:00:00',
            'end_hour' => '22:00:00',
            'place' => 'Gymnase Louis Jourdan',
            'city' => 'BOURG-LES-VALENCE',
            'description' =>
            "Le volley-ball est un sport d’équipe où la technique joue un rôle important pour chaque joueur.
            Nos objectifs sont les suivants : 
                Que nos membres puissent progresser par des exercices techniques simples afin d'obtenir une certaine aisance de jeu sans 'se prendre la tête' !
                Créer une dynamique d'entraide, s’encourager et former un collectif.
                Faire en sorte que chaque personne puisse trouver sa place
            Si ces ojectifs vous motivent, vous êtes le (la) bienvenu(e) quelque soit votre niveau.
             La section est composée de deux groupes :
                Une équipe évoluant en championnat Ufolep Drome-Ardèche
                Une section loisir"
        ]);

        Section::create([
            'name' => 'Randonnée',
            'leader' => 'Jean-Paul TABOYAN',
            'leader_phone_number' =>  '06 89 66 25 81',
            'leader_email' => null,
            'assistant' => null,
            'assistant_phone_number' => null,
            'day' => 'lundi',
            'start_hour' => '20:00:00',
            'end_hour' => '22:00:00',
            'place' => 'variable',
            'city' => 'Vercors',
            'description' =>
            "Depuis la création de l’association en 1995, le trekking et les sorties en raquettes en moyenne montagne sont organisés ponctuellement, souvent sur une durée de 3 à 4 jours.
            
            En 2018, après une interruption, nous avons relancé la randonnée, en faisant participer des demandeurs d'asile.
        
            Les sorties que nous proposons sont de difficulté moyenne (moins de 1000m de dénivelé). Elles sont destinées à des randonneurs qui ont l’habitude de partir pour au moins 6 heures.
            
            A la demande, nous pouvons vous proposer des nuitées en refuge non gardé ou en gîte (pour plus de renseignements, prenez contact avec le Président).
            Pour cette saison, à ce jour, trois sorties ont été organisées :
            
            - Deux nuitées :
            - En septembre au refuge du pré Grandu à 1300m dans le Vercors et l’ascension du Grd Veymont (Set 21 - 16pers)
            - En novembre au refuge de la Tour à 1300m dans le haut Diois (7pers)
            
            - Une journée au brame du cerf dans le Vercors (19 pers)
            
            Une nouvelle équipe de responsables doit se constituer autour de Jean-Paul Taboyan afin de construire dans la durée des objectifs et des projets qui nous rassemblent."
        ]);

        Section::create([
            'name' => 'Pétanque',
            'leader' => 'Jean-Paul TABOYAN',
            'leader_phone_number' =>  '06 89 66 25 81',
            'leader_email' => null,
            'assistant' => null,
            'assistant_phone_number' => null,
            'day' => 'lundi',
            'start_hour' => '20:00:00',
            'end_hour' => '22:00:00',
            'place' => 'A venir',
            'city' => 'A venir',
            'description' =>
            "A venir"
        ]);
    }
}
