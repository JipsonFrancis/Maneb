<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Blackbox;
use App\Models\Center;
use App\Models\Checkpoint;
use App\Models\Exam;
use App\Models\ExamPaper;
use App\Models\Packet;
use App\Models\Role;
use App\Models\Subject;
use App\Models\Transit;
use App\Models\Truck;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $iframe = array([
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50246.99893013921!2d33.78838122860532!3d-13.963420690925872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19202d2848b3eb31%3A0x3ead09117ba69a26!2sKamuzu%20Institute%20for%20Sports!5e0!3m2!1sen!2smw!4v1680627247018!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50246.99893013921!2d33.78838122860532!3d-13.963420690925872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19202c66bd562ec7%3A0xdec9d9077a8884c2!2sKumbali%20Country%20Lodge!5e0!3m2!1sen!2smw!4v1680629522327!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29237.656644538605!2d33.796478509555946!3d-13.95699452713972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19202ccb00703ced%3A0x6d90e1e64728b536!2sGolden%20Peacock%20Hotel!5e0!3m2!1sen!2smw!4v1680629549129!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29237.656644538605!2d33.796478509555946!3d-13.95699452713972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d50b7aa6ff73%3A0xc61edc128f383cc9!2sClimb%20Malawi!5e0!3m2!1sen!2smw!4v1680629578655!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', 
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14203.094903219308!2d33.7991561302162!3d-13.949917966412558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19202dcf83f08ba3%3A0x6715bffb941386c7!2sAdziwa%20Christian%20Schools!5e0!3m2!1sen!2smw!4v1680629622681!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62570.721517318554!2d33.94392805478588!3d-11.43147397000442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d3039d0f8ae75%3A0xf0f00e912b55adf2!2sMzuzu%20University!5e0!3m2!1sen!2smw!4v1680629702394!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>',
            '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62570.721517318554!2d33.94392805478588!3d-11.43147397000442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d31bb4d70aa27%3A0x77d8305adef93583!2sMzuzu%20International%20Academy!5e0!3m2!1sen!2smw!4v1680629739359!5m2!1sen!2smw" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>']);

//Examination
        for($i = 0; $i < 4; $i++)
        {
            $plsc = Exam::create([
                'name' => 'Primary School Leaver Certificate',
                'year' => fake()->date()
            ]);
            $jce = Exam::create([
                'name' => 'Junior Certificate',
                'year' => fake()->date()
            ]);
            $msce = Exam::create([
                'name' => 'Malawi Secondary School Certificate',
                'year' => fake()->date()
            ]);
        }

// Subject
        for ($i = 0; $i <= 5; $i++)
        {
            $subject_1 = Subject::create([
                'name' => fake()->unique()->name()
            ]);
            $subject_2 = Subject::create([
                'name' => fake()->unique()->name()
            ]);
            $subject_3 = Subject::create([
                'name' => fake()->unique()->name()
            ]);
            $subject_4 = Subject::create([
                'name' => fake()->unique()->name()
            ]);
            $subject_5 = Subject::create([
                'name' => fake()->unique()->name()
            ]);
        }
// roles
        $role_1 = Role::create([
            'name' => 'Driver',
        ]);
        $role_2 = Role::create([
            'name' => 'Cheif Inviglator',
        ]);
        $role_3 = Role::create([
            'name' => 'Police',
        ]);
        $role_4 = Role::create([
            'name' => 'Administrator',
        ]);
        $role_5 = Role::create([
            'name' => 'DHO',
        ]);

// trucks
        $truck_1 = Truck::create([
            'licence' => fake()->e164PhoneNumber(),
            //'occupied' => 0,
        ]);
        $truck_2 = Truck::create([
            'licence' => fake()->e164PhoneNumber(),
            //'occupied' => 0,
        ]);
        $truck_3 = Truck::create([
            'licence' => fake()->e164PhoneNumber(),
            //'occupied' => 0,
        ]);

// User and Center
        for($i = 0; $i <= 10; $i++)
        {
            $user = User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'role_id' => fake()->randomElement([$role_1->id, $role_2->id, $role_3->id, $role_4->id, $role_5->id]),
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
            ]);

            if ($i % 2 == 0)
            {
                $center = Center::create([
                    'name' => fake()->name(),
                    'invigilator' => $user->id,
                    'type' => fake()->randomElement(['distribution', 'school']),
                    'iframe' => fake()->randomElement([
                        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50246.99893013921!2d33.78838122860532!3d-13.963420690925872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19202d2848b3eb31%3A0x3ead09117ba69a26!2sKamuzu%20Institute%20for%20Sports!5e0!3m2!1sen!2smw!4v1680627247018!5m2!1sen!2smw', 
                        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50246.99893013921!2d33.78838122860532!3d-13.963420690925872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19202c66bd562ec7%3A0xdec9d9077a8884c2!2sKumbali%20Country%20Lodge!5e0!3m2!1sen!2smw!4v1680629522327!5m2!1sen!2smw', 
                        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29237.656644538605!2d33.796478509555946!3d-13.95699452713972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19202ccb00703ced%3A0x6d90e1e64728b536!2sGolden%20Peacock%20Hotel!5e0!3m2!1sen!2smw!4v1680629549129!5m2!1sen!2smw',
                        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29237.656644538605!2d33.796478509555946!3d-13.95699452713972!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1921d50b7aa6ff73%3A0xc61edc128f383cc9!2sClimb%20Malawi!5e0!3m2!1sen!2smw!4v1680629578655!5m2!1sen!2smw', 
                        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14203.094903219308!2d33.7991561302162!3d-13.949917966412558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19202dcf83f08ba3%3A0x6715bffb941386c7!2sAdziwa%20Christian%20Schools!5e0!3m2!1sen!2smw!4v1680629622681!5m2!1sen!2smw',
                        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62570.721517318554!2d33.94392805478588!3d-11.43147397000442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d3039d0f8ae75%3A0xf0f00e912b55adf2!2sMzuzu%20University!5e0!3m2!1sen!2smw!4v1680629702394!5m2!1sen!2smw',
                        'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62570.721517318554!2d33.94392805478588!3d-11.43147397000442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x191d31bb4d70aa27%3A0x77d8305adef93583!2sMzuzu%20International%20Academy!5e0!3m2!1sen!2smw!4v1680629739359!5m2!1sen!2smw']),
                    'longitude' => fake()->randomFloat(),
                    'latitude' => fake()->randomFloat(),
                ]);
            }
        }
// Exam papers
        $papers_1 = ExamPaper::create([
            'name' => fake()->unique()->name(),
            'exam_id' => $plsc->id,
            'subject_id' => $subject_1->id,
            'invigilator' => $user->id,
            'paper_number' => fake()->randomElement([1,2,3,4]),
            'date' => fake()->date(),
        ]);
        $papers_2 = ExamPaper::create([
            'name' => fake()->unique()->name(),
            'exam_id' => $jce->id,
            'subject_id' => $subject_2->id,
            'invigilator' => $user->id,
            'paper_number' => '',
            'date' => fake()->date(),
        ]);
        $papers_3 = ExamPaper::create([
            'name' => fake()->unique()->name(),
            'exam_id' => $msce->id,
            'subject_id' => $subject_3->id,
            'invigilator' => $user->id,
            'paper_number' => fake()->randomElement([1,2,3,4]),
            'date' => fake()->date(),
        ]);
        $papers_4 = ExamPaper::create([
            'name' => fake()->unique()->name(),
            'exam_id' => $plsc->id,
            'subject_id' => $subject_4->id,
            'invigilator' => $user->id,
            'paper_number' => fake()->randomElement([1,2,3,4]),
            'date' => fake()->date(),
        ]);
        $papers_5 = ExamPaper::create([
            'name' => fake()->unique()->name(),
            'exam_id' => $msce->id,
            'subject_id' => $subject_5->id,
            'invigilator' => $user->id,
            'paper_number' => '',
            'date' => fake()->date(),
        ]);

// Transit
        $transit_1 = Transit::create([
            'name' => fake()->unique()->name(),
            // 'blackbox_id' => $box_1->id,
            'driver_id' => $user->id,
            'truck_id' => $truck_1->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
        ]);
        $transit_2 = Transit::create([
            'name' => fake()->unique()->name(),
            // 'blackbox_id' => $box_2->id,
            'driver_id' => $user->id,
            'truck_id' => $truck_2->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
        ]);
        $transit_3 = Transit::create([
            'name' => fake()->unique()->name(),
            // 'blackbox_id' => $box_3->id,
            'driver_id' => $user->id,
            'truck_id' => $truck_3->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
        ]);


//blackbox
        $box_1 = Blackbox::create([
            'name' => fake()->unique()->name(),
            'transit_id' => $transit_1->id,
            'initial_location' => $center->id,
            'current_location' => $center->id,
            'destination' => $center->id,
            'QR' => "QR-". $subject_2->name.'-'.$subject_2->id
        ]);
        $box_2 = Blackbox::create([
            'name' => fake()->unique()->name(),
            'transit_id' => $transit_2->id,
            'initial_location' => $center->id,
            'current_location' => $center->id,
            'destination' => $center->id,
            'QR' => "QR-". $subject_1->name.'-'.$subject_1->id
        ]);
        $box_3 = Blackbox::create([
            'name' => fake()->unique()->name(),
            'transit_id' => $transit_3->id,
            'initial_location' => $center->id,
            'current_location' => $center->id,
            'destination' => $center->id,
            'QR' => "QR-". $subject_2->name.'-'.$subject_2->id
        ]);
        $box_4 = Blackbox::create([
            'name' => fake()->unique()->name(),
            'transit_id' => $transit_1->id,
            'initial_location' => $center->id,
            'current_location' => $center->id,
            'destination' => $center->id,
            'QR' => "QR-". $subject_3->name.'-'.$subject_3->id
        ]);

//paper packs
        $pack_1 = Packet::create([
            'name' => fake()->unique()->name(),
            'exam_paper' => $papers_1->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
            'blackbox_id' => $box_1->id,
            'QR' => "QR-". $papers_1->name.'-'.$papers_1->id
        ]);
        $pack_2 = Packet::create([
            'name' => fake()->unique()->name(),
            'exam_paper' => $papers_2->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
            'blackbox_id' => $box_2->id,
            'QR' => "QR-". $papers_2->name.'-'.$papers_2->id
        ]);
        $pack_3 = Packet::create([
            'name' => fake()->unique()->name(),
            'exam_paper' => $papers_3->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
            'blackbox_id' => $box_3->id,
            'QR' => "QR-". $papers_3->name.'-'.$papers_3->id
        ]);
        $pack_4 = Packet::create([
            'name' => fake()->unique()->name(),
            'exam_paper' => $papers_4->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
            'blackbox_id' => $box_4->id,
            'QR' => "QR-". $papers_4->name.'-'.$papers_4->id
        ]);
        $pack_5 = Packet::create([
            'name' => fake()->unique()->name(),
            'exam_paper' => $papers_1->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
            'blackbox_id' => $box_1->id,
            'QR' => "QR-". $papers_1->name.'-'.$papers_1->id
        ]);
        $pack_6 = Packet::create([
            'name' => fake()->unique()->name(),
            'exam_paper' => $papers_2->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
            'blackbox_id' => $box_2->id,
            'QR' => "QR-". $papers_2->name.'-'.$papers_2->id
        ]);
        $pack_7 = Packet::create([
            'name' => fake()->unique()->name(),
            'exam_paper' => $papers_3->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
            'blackbox_id' => $box_3->id,
            'QR' => "QR-". $papers_3->name.'-'.$papers_3->id
        ]);
        $pack_8 = Packet::create([
            'name' => fake()->unique()->name(),
            'exam_paper' => $papers_4->id,
            'initial_location' => $center->id,
            'destination' => $center->id,
            'blackbox_id' => $box_4->id,
            'QR' => "QR-". $papers_4->name.'-'.$papers_4->id
        ]);

// checkpoint
        $point_1 = Checkpoint::create([
            'name' => fake()->unique()->country(),
            'transit_id' => $transit_1->id,
            'invigilator' => $user->id,
            'box' => $box_1->id,
            'location' => $center->id
        ]);
        $point_2 = Checkpoint::create([
            'name' => fake()->unique()->country(),
            'transit_id' => $transit_2->id,
            'invigilator' => $user->id,
            'box' => $box_2->id,
            'location' => $center->id
        ]);
        $point_3 = Checkpoint::create([
            'name' => fake()->unique()->country(),
            'transit_id' => $transit_3->id,
            'invigilator' => $user->id,
            'box' => $box_4->id,
            'location' => $center->id
        ]);
        $point_4 = Checkpoint::create([
            'name' => fake()->unique()->country(),
            'transit_id' => $transit_1->id,
            'invigilator' => $user->id,
            'box' => $box_3->id,
            'location' => $center->id
        ]);

    }
}
