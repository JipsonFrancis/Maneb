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
            //'location' => $center->id
        ]);
        $point_2 = Checkpoint::create([
            'name' => fake()->unique()->country(),
            'transit_id' => $transit_2->id,
            'invigilator' => $user->id,
            'box' => $box_2->id,
            //'location' => $center->id
        ]);
        $point_3 = Checkpoint::create([
            'name' => fake()->unique()->country(),
            'transit_id' => $transit_3->id,
            'invigilator' => $user->id,
            'box' => $box_4->id,
            //'location' => $center->id
        ]);
        $point_4 = Checkpoint::create([
            'name' => fake()->unique()->country(),
            'transit_id' => $transit_1->id,
            'invigilator' => $user->id,
            'box' => $box_3->id,
            //'location' => $center->id
        ]);

    }
}
