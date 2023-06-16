<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Exercise;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* $this->call([
            UserSeeder::class,
            ExerciseSeeder::class,
            AchievementSeeder::class,
        ]); */

        $exercises = [
            [
                'name' => 'Squat',
                'img' => 'https://gethealthyu.com/wp-content/uploads/2014/08/Basic-Squat_Exercise.jpg',
                'description_eng' => "A squat is a group exercise that involves a series of movements designed to target various muscle groups. Here is a simple and concise explanation of how to perform a squat:\n\nStart by standing straight with your feet shoulder-width apart.\nLower your body by bending your knees while keeping your back straight. Imagine sitting back into an imaginary chair.\nContinue lowering yourself until your thighs are parallel to the ground, or as low as you comfortably can.\nMake sure your knees are in line with your toes and not extending beyond them.\nPush through your heels and engage your leg muscles to return to the starting position.\nRepeat the squat movement for the desired number of repetitions.",
                'description_nld' => "Een squat is een groepsoefening die bestaat uit een reeks bewegingen die gericht zijn op verschillende spiergroepen. Hier is een korte en heldere uitleg over hoe je een squat uitvoert:\n\nGa staan met je voeten op schouderbreedte uit elkaar en je tenen iets naar buiten gedraaid.\nHoud je borst omhoog en span je buikspieren aan.\nBuig je knieën en duw je heupen naar achteren om je lichaam te laten zakken.\nGa door met zakken totdat je dijen parallel zijn aan de grond, of zo laag als je comfortabel kunt.\nPauzeer een moment en duw vervolgens door je hielen om terug te keren naar de startpositie.\nHerhaal de beweging voor het gewenste aantal herhalingen."
            ],
            [
                'name' => 'Push-up',
                'img' => '',
                'description_eng' => "A push-up is a classic exercise that primarily targets the muscles in your chest, shoulders, and arms. Here is a simple and concise explanation of how to perform a push-up:\n\nStart by positioning yourself face down on the floor, with your hands slightly wider than shoulder-width apart.\nStraighten your arms and extend your legs, keeping your toes on the ground.\nEngage your core muscles and maintain a straight line from your head to your heels.\nLower your body by bending your arms, allowing your chest to approach the ground.\nStop when your chest is just above the ground, or as low as you can comfortably go.\nPush through your hands to straighten your arms and raise your body back to the starting position.\nRepeat the movement for the desired number of repetitions.",
                'description_nld' => "Een push-up is een klassieke oefening die voornamelijk gericht is op de spieren in je borst, schouders en armen. Hier is een korte en heldere uitleg over hoe je een push-up uitvoert:\n\nBegin door met je gezicht naar beneden op de grond te liggen, met je handen iets breder dan schouderbreedte uit elkaar.\nStrek je armen en strek je benen, waarbij je je tenen op de grond houdt.\nSpan je buikspieren aan en behoud een rechte lijn van je hoofd tot je hielen.\nBuig je armen en laat je lichaam zakken, zodat je borst naar de grond toe beweegt.\nStop wanneer je borst net boven de grond is, of zo laag als je comfortabel kunt gaan.\nDuw door je handen om je armen te strekken en je lichaam terug te brengen naar de startpositie.\nHerhaal de beweging voor het gewenste aantal herhalingen."
            ],
            [
                'name' => 'Dip',
                'img' => '',
                'description_eng' => "A dip is an exercise that targets your triceps, chest, and shoulders. Here is a simple and concise explanation of how to perform a dip:\n\nFind parallel bars or use a dip station. Place your hands on the bars with your palms facing down and grip firmly.\nLift yourself up, straightening your arms, so that your feet are off the ground and your arms are supporting your body weight.\nKeep your torso upright and engage your core muscles.\nLower your body by bending your elbows and allowing your chest to move towards the bars.\nContinue descending until your upper arms are parallel to the ground or as low as you comfortably can.\nPush through your hands to straighten your arms and lift your body back up to the starting position.\nRepeat the movement for the desired number of repetitions.\n",
                'description_nld' => "Een dip is een oefening die gericht is op je triceps, borst en schouders. Hier is een eenvoudige en beknopte uitleg over hoe je een dip kunt uitvoeren:\n\nZoek parallelle stangen of gebruik een dipsysteem. Plaats je handen op de stangen met je handpalmen naar beneden gericht en grijp stevig vast.\nTil jezelf op, strek je armen recht, zodat je voeten van de grond komen en je armen je lichaamsgewicht ondersteunen.\nHoud je bovenlichaam rechtop en span je buikspieren aan.\nVerlaag je lichaam door je ellebogen te buigen en je borst naar de stangen te laten bewegen.\nBlijf dalen totdat je bovenarmen parallel zijn aan de grond of zo laag als comfortabel mogelijk is.\nDuw door je handen om je armen te strekken en til je lichaam weer op naar de startpositie.\nHerhaal de beweging voor het gewenste aantal herhalingen."
            ],
            [
                'name' => 'Plank',
                'img' => '',
                'description_eng' => "The plank is a core-strengthening exercise that also engages your shoulders, arms, and glutes. Here is a simple and concise explanation of how to perform a plank:\n\nStart by positioning yourself face down on the floor.\nPlace your forearms on the ground, aligning your elbows directly under your shoulders.\nExtend your legs straight back, resting on your toes.\nEngage your core muscles by drawing your belly button towards your spine.\nKeep your body in a straight line from your head to your heels, avoiding sagging or lifting your hips.\nHold this position for a specific duration, focusing on maintaining proper form and breathing steadily.\nTo finish, gently lower your knees to the ground and rest.\n",
                'description_nld' => "De plank is een oefening die je kernspieren versterkt en ook je schouders, armen en bilspieren activeert. Hier is een korte en heldere uitleg over hoe je een plank uitvoert:\n\nBegin door met je gezicht naar beneden op de grond te liggen.\nPlaats je onderarmen op de grond, waarbij je ellebogen recht onder je schouders staan.\nStrek je benen recht naar achteren, rustend op je tenen.\nSpan je buikspieren aan door je navel naar je ruggengraat te trekken.\nHoud je lichaam in een rechte lijn van je hoofd tot je hielen, vermijd doorzakken of het optillen van je heupen.\nHoud deze positie gedurende een bepaalde periode vast, let op het behouden van de juiste houding en adem regelmatig.\nOm te eindigen, laat je knieën voorzichtig op de grond zakken en rust uit.\n"
            ],
            [
                'name' => 'Horsekick',
                'img' => '',
                'description_eng' => "The horse kick is an exercise that targets your glutes, hamstrings, and core muscles. Here is a simple and concise explanation of how to perform a horse kick:\n\nStart by getting down on all fours on an exercise mat or a soft surface.\nAlign your hands directly under your shoulders and your knees under your hips.\nExtend one leg straight back, keeping it parallel to the ground.\nEngage your glutes and core muscles for stability.\nFrom this position, kick the extended leg out to the side, keeping it straight and in line with your body.\nReturn the leg to the starting position, keeping it off the ground.\nRepeat the kick for the desired number of repetitions on one side, then switch to the other leg.\n",
                'description_nld' => "De horse kick is een oefening die gericht is op je bilspieren, hamstrings en kernspieren. Hier is een korte en heldere uitleg over hoe je een horse kick uitvoert:\n\nGa op handen en knieën op een fitnessmat of zachte ondergrond zitten.\nPlaats je handen recht onder je schouders en je knieën recht onder je heupen.\nStrek één been recht naar achteren, houd het parallel aan de grond.\nSpan je bilspieren en kernspieren aan voor stabiliteit.\nVanuit deze positie trap je het gestrekte been zijwaarts uit, houd het recht en in lijn met je lichaam.\nBreng het been terug naar de startpositie, zonder de grond te raken.\nHerhaal de trapbeweging voor het gewenste aantal herhalingen aan één kant, en wissel vervolgens naar het andere been.\n"
            ],
            [
                'name' => 'Mountain climber',
                'img' => '',
                'description_eng' => "The mountain climber is a dynamic exercise that targets your core, shoulders, and legs. Here is a simple and concise explanation of how to perform a mountain climber:\n\nStart in a high plank position with your hands directly under your shoulders and your body forming a straight line.\nEngage your core muscles by drawing your belly button towards your spine.\nLift your right foot off the ground and drive your right knee towards your chest, while keeping your left leg extended.\nQuickly switch legs by extending your right leg back and bringing your left knee towards your chest.\nContinue alternating the movement, as if you're running in place while in a plank position.\nKeep your hips down and maintain a steady pace throughout the exercise.\nRepeat the movement for the desired number of repetitions or time duration.\n",
                'description_nld' => "De mountain climber is een dynamische oefening die je kernspieren, schouders en benen traint. Hier is een korte en heldere uitleg over hoe je een mountain climber uitvoert:\n
                \n
                Begin in een hoge plankpositie met je handen recht onder je schouders en je lichaam in een rechte lijn.\n
                Span je buikspieren aan door je navel naar je ruggengraat te trekken.\n
                Til je rechtervoet van de grond en breng je rechterknie richting je borst, terwijl je je linkervoet gestrekt houdt.\n
                Wissel snel van been door je rechterbeen naar achteren te strekken en je linkerknie naar je borst te brengen.\n
                Blijf de beweging afwisselen alsof je in een plankpositie aan het rennen bent.\n
                Houd je heupen laag en houd een constant tempo aan gedurende de oefening.\n
                Herhaal de beweging voor het gewenste aantal herhalingen of tijdsduur.\n
                "
            ],
            [
                'name' => 'Burpee',
                'img' => '',
                'description_eng' => "The burpee is a full-body exercise that combines strength and cardio. Here is a simple and concise explanation of how to perform a burpee:\n
                \n
                Start by standing with your feet shoulder-width apart.\n
                Lower your body into a squat position, placing your hands on the ground in front of you.\n
                Kick your feet back, landing in a plank position with your arms extended.\n
                Immediately lower your chest and thighs to the ground, as if doing a push-up.\n
                Push through your hands to raise your chest and thighs off the ground, returning to the plank position.\n
                Jump your feet forward, landing in the squat position again.\n
                Explosively jump up, reaching your arms overhead.\n
                As you land, lower your body back into the squat position to start the next repetition.\n
                Repeat the movement for the desired number of repetitions or time duration.\n
                ",
                'description_nld' => "De burpee is een oefening voor het hele lichaam die kracht en cardio combineert. Hier is een korte en heldere uitleg over hoe je een burpee uitvoert:\n
                \n
                Begin door te staan met je voeten op schouderbreedte uit elkaar.\n
                Buig je knieën en ga naar een squatpositie, plaats je handen op de grond voor je.\n
                Schop je voeten naar achteren, landend in een plankpositie met je armen gestrekt.\n
                Laat onmiddellijk je borst en dijen naar de grond zakken, alsof je een push-up doet.\n
                Duw met je handen om je borst en dijen van de grond te tillen en terug te keren naar de plankpositie.\n
                Spring met je voeten naar voren, landend in de squatpositie.\n
                Spring explosief omhoog en strek je armen boven je hoofd.\n
                Bij het landen buig je je knieën weer in de squatpositie om de volgende herhaling te beginnen.\n
                Herhaal de beweging voor het gewenste aantal herhalingen of tijdsduur.\n
                "
            ],
            [
                'name' => 'Lunge',
                'img' => 'https://i0.wp.com/greatist.com/sites/default/files/styles/article-main-x-large-852/public/Lunge.png?itok=rpvmRLtY%201x?w=1155&h=1192
                ',
                'description_eng' => "The lunge is a lower body exercise that targets your quadriceps, hamstrings, and glutes. Here is a simple and concise explanation of how to perform a lunge:\n
                \n
                Start by standing tall with your feet hip-width apart.\n
                Take a step forward with your right leg, ensuring your knee is directly above your ankle.\n
                Lower your body by bending both knees until your right thigh is parallel to the ground, and your left knee is hovering just above the floor.\n
                Keep your upper body upright with your core engaged and your chest lifted.\n
                Push through your right heel to return to the starting position.\n
                Repeat the movement on the other side by stepping forward with your left leg.\n
                Continue alternating legs, performing lunges for the desired number of repetitions.\n
                ",
                'description_nld' => "De lunge is een oefening voor de onderste helft van het lichaam die je quadriceps, hamstrings en bilspieren traint. Hier is een korte en heldere uitleg over hoe je een lunge uitvoert:\n
                \n
                Begin rechtop te staan met je voeten op heupbreedte van elkaar.\n
                Neem een stap naar voren met je rechterbeen, zorg ervoor dat je knie recht boven je enkel staat.\n
                Laat je lichaam zakken door beide knieën te buigen, totdat je rechterdij parallel is aan de grond en je linkerknie net boven de vloer zweeft.\n
                Houd je bovenlichaam rechtop met je buikspieren aangespannen en je borst omhoog.\n
                Duw door je rechterhiel om terug te keren naar de startpositie.\n
                Herhaal de beweging aan de andere kant door een stap naar voren te zetten met je linkerbeen.\n
                Blijf afwisselend benen gebruiken en voer lunges uit voor het gewenste aantal herhalingen.\n
                "
            ],
            [
                'name' => 'Wall sit',
                'img' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/young-man-doing-the-wall-sit-exercise-outdoors-royalty-free-image-1675863005.jpg
                ',
                'description_eng' => "The wall sit is a lower body exercise that primarily targets your quadriceps. Here is a simple and concise explanation of how to perform a wall sit:\n
                \n
                Find an empty wall and stand with your back against it.\n
                Slowly slide your back down the wall, bending your knees, until your thighs are parallel to the ground.\n
                Keep your feet flat on the floor and your knees directly above your ankles.\n
                Your back should be pressed against the wall, and your core should be engaged.\n
                Hold this position, ensuring your thighs are parallel to the ground and your knees are at a 90-degree angle.\n
                Maintain good posture with your shoulders relaxed and your gaze forward.\n
                Breathe steadily and hold the wall sit for the desired duration.\n
                ",
                'description_nld' => "De wall sit is een oefening voor de onderste helft van het lichaam die voornamelijk je quadriceps traint. Hier is een korte en heldere uitleg over hoe je een wall sit uitvoert:\n
                \n
                Zoek een lege muur en ga met je rug tegen de muur staan.\n
                Glijd langzaam met je rug naar beneden langs de muur, buig je knieën totdat je dijen parallel zijn aan de grond.\n
                Houd je voeten plat op de grond en zorg ervoor dat je knieën recht boven je enkels staan.\n
                Je rug moet tegen de muur gedrukt zijn en je buikspieren moeten aangespannen zijn.\n
                Houd deze positie vast, zorg ervoor dat je dijen parallel aan de grond zijn en je knieën een hoek van 90 graden vormen.\n
                Houd een goede houding aan met ontspannen schouders en kijk naar voren.\n
                Adem rustig door en houd de wall sit vast voor de gewenste tijdsduur.\n
                "
            ],
            [
                'name' => 'Crunch',
                'img' => 'https://gethealthyu.com/wp-content/uploads/2014/07/Basic-Crunch_Exercise.jpg
                ',
                'description_eng' => "The crunch is an abdominal exercise that targets your rectus abdominis muscles. Here is a simple and concise explanation of how to perform a crunch:\n
                \n
                Lie down on your back on an exercise mat with your knees bent and feet flat on the ground, hip-width apart.\n
                Place your hands lightly behind your head, avoiding pulling on your neck.\n
                Engage your core muscles by drawing your belly button towards your spine.\n
                Slowly lift your upper body off the ground, curling forward while keeping your lower back in contact with the mat.\n
                Focus on contracting your abdominal muscles and avoid using momentum to lift yourself.\n
                Lift until your shoulder blades are off the mat and pause briefly at the top of the movement.\n
                Slowly lower your upper body back down to the starting position, maintaining control.\n
                Repeat the movement for the desired number of repetitions.\n
                ",
                'description_nld' => "De crunch is een oefening voor de buikspieren die zich richt op de rechte buikspieren. Hier is een korte en heldere uitleg over hoe je een crunch uitvoert:\n
                \n
                Ga op je rug liggen op een fitnessmat met gebogen knieën en je voeten plat op de grond, op heupbreedte van elkaar.\n
                Plaats je handen lichtjes achter je hoofd, vermijd het trekken aan je nek.\n
                Span je buikspieren aan door je navel naar je ruggengraat te trekken.\n
                Til langzaam je bovenlichaam van de grond, krul naar voren terwijl je onderrug in contact blijft met de mat.\n
                Focus op het samentrekken van je buikspieren en vermijd het gebruik van momentum om jezelf op te tillen.\n
                Til jezelf op totdat je schouderbladen van de mat komen en pauzeer kort op het hoogste punt van de beweging.\n
                Laat je bovenlichaam langzaam weer terugzakken naar de startpositie, waarbij je controle houdt.\n
                Herhaal de beweging voor het gewenste aantal herhalingen.\n
                "
            ],
        ];

        foreach ($exercises as $exercise) {
            Exercise::create([
                'name' => $exercise['name'],
                'img' => $exercise['img'],
                'description_eng' => $exercise['description_eng'],
                'description_nld' => $exercise['description_nld'],
            ]);
        }
    }
}
